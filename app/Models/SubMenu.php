<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubMenu extends Model
{
    use HasFactory;
    protected $fillable = ['*'];
    protected $table = 'sub_menus';

    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id')->where('type','submenu');
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function menu(){

        return $this->hasMany(Menu::class ,'id','menu_id');
    }

    public function menus(){
        return $this->belongsTo(Menu::class,'id','menu_id');

    }


    public static function storeSubmenu($request)
    {
        $submenu = new self();
        return self::saveSubmenu($request, $submenu);
    }

    public static function updateSubmenu($request, $id)
    {
        $submenu = self::find($id);
        return self::saveSubmenu($request, $submenu);
    }
    public static function saveSubmenu($request, $submenu)
    {
        DB::transaction(function() use($request, $submenu) {
            $submenu->menu_id = $request['cat'];
            $submenu->save();
            Translate::storeTranslate($request, $submenu->id);
        });
//        dd($request->all(), $submenu);
//        DB::transaction(function() use($request, $submenu) {
//            $submenu->menu_id = $request['cat'];
//            $submenu->save();
//            Translate::storeTranslate($request, $submenu->id);
//        });
        return $submenu;
    }

    public static function deleteItemRow($id)
    {
//        $submenu = submenu::where('id',$id)->get();
//        $submenu = Product::where('submenu_id',$id)->get();
//        if(!$submenu->isEmpty()){
//            return false;
//        }else{
        Submenu::where('id',$id)->delete();
        Translate::where('page_id',$id)->where('type','submenu')->delete();
        return true;
//        }
    }

    public static function getSubmenu(){
        $categories =Submenu::with(['translate'=>function($q){
            $q->where('code',app()->getLocale());
        }])->get();
        return $categories;
    }
}


