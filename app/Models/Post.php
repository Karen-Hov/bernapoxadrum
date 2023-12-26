<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public static $large_image_path = 'storage/posts/large/';
    public static $medium_image_path = 'storage/posts/medium/';
    public static $small_image_path = 'storage/posts/small/';


    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id')->where('type','post');
    }

    public function categorys()
    {
        return $this->hasMany(SubMenu::class ,'id','type');
    }

    public static function storePost($request)
    {
        $posts = new self();
        return self::savePost($request, $posts);
    }
    public static function updatePost($request, $id)
    {
        $posts = self::find($id);
        if ($request->file){
            unlink(public_path('storage/posts/'.$posts->file));
            unlink(public_path('storage/posts/small/'.$posts->file));
            unlink(public_path('storage/posts/medium/'.$posts->file));
            unlink(public_path('storage/posts/large/'.$posts->file));
        }
        return self::savePost($request, $posts);
    }
    public static function savePost($request, $posts)
    {
//        dd($request->all(),$request->hasFile('file'));
        DB::transaction(function() use($request, $posts) {
            if ($request->hasFile('file')) {
                $image_tmp = $request['file'];
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $pathRep = $image_tmp->storeAs('public/posts/', $filename);
                    $pathRep = $image_tmp->storeAs('public/posts/large/', $filename);
                    $pathRep = $image_tmp->storeAs('public/posts/medium/', $filename);
                    $pathRep = $image_tmp->storeAs('public/posts/small/', $filename);
                    $posts->file = $filename;
                    if ($request->x) {
                        $imagecrop = $request->x;  // your base64 encoded
                        $imagecrop = str_replace('data:image/png;base64,', '', $imagecrop);
                        $imagecrop = str_replace(' ', '+', $imagecrop);
                        $imageName = $filename;

                        \File::put(public_path(Self::$large_image_path . $imageName), base64_decode($imagecrop));
                        \File::put(public_path(Self::$medium_image_path . $imageName), base64_decode($imagecrop));
                        \File::put(public_path(Self::$small_image_path. $imageName), base64_decode($imagecrop));
                    }
                    else{
                        Image::make($image_tmp)->resize(457,  539, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(Self::$large_image_path . $filename);

                        Image::make($image_tmp)->resize(310,  324, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(Self::$medium_image_path . $filename);
//
                        Image::make($image_tmp)->resize(134,  114, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(Self::$small_image_path. $filename);
                    }
                    $posts->file = $filename;
                }
            }
            if ($request->hasFile('file_logo')) {
                $image_tmp = $request['file_logo'];
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $file_logo = time() . '.' . $extension;
                    $pathRep = $image_tmp->storeAs('public/posts/', $file_logo);
                    $pathRep = $image_tmp->storeAs('public/posts/large/', $file_logo);
                    $pathRep = $image_tmp->storeAs('public/posts/medium/', $file_logo);
                    $pathRep = $image_tmp->storeAs('public/posts/small/', $file_logo);
                    $posts->file_logo = $file_logo;
                    $posts->file_logo = $file_logo;
                }
            }
//            else{
//                $posts->file = null;
//            }
//            dd($posts);
            $posts->code = $request['lang'];
            $posts->title = $request['title'];
            $posts->subtitle = $request['subtitle'];
            $posts->content = $request['content'];

            $posts->type =  $request['cat'];
            $posts->link =  $request['link'];
            $posts->slayd_check =  $request['slayder']?1:0;
            $posts->video =  $request['video']?$request['video']:"";

            $posts->save();
            Gallery::storeGallery($request, $posts->id);
//            Translate::storeTranslate($request, $posts->id);
        });
        return $posts;


    }

    public static function deleteItemRow($id)
    {
        $posts =  self::find($id);
        Post::where('id', $id)->delete();
        if ($posts->file){
            unlink(public_path('storage/posts/'.$posts->file));
            unlink(public_path('storage/posts/small/'.$posts->file));
            unlink(public_path('storage/posts/medium/'.$posts->file));
            unlink(public_path('storage/posts/large/'.$posts->file));
        }
        return true;
    }

    public static function slayd_change($request){

        if($request->slayder_checked){
            $posts = Post::where('id',$request->id)->update(['slayder'=>0]);
//            dd($request->slayder_checked,$posts);
            return 'off';
    }else{
       $posts = Post::where('id',$request->id)->update(['slayder'=>1]);
       return 'on';
   }
}

//    public static function getPosts(){
//        $posts = Post::with(['t'=>function($q){
//            $q->where('code',app()->getLocale())->where('type','partner');
//        }])->get();
//
//        return $posts;
//    }


}
