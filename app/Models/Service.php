<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['*'];

    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id')->where('type','service');
    }


    public static function storeService($request)
    {
        $service = new self();
        return self::saveService($request, $service);
    }

    public static function updateService($request, $id)
    {
        $service = self::find($id);
        if ($request->file){
            unlink(public_path('storage/service/'.$service->file));
            unlink(public_path('storage/service/small/'.$service->file));
            unlink(public_path('storage/service/medium/'.$service->file));
            unlink(public_path('storage/service/large/'.$service->file));
        }
        return self::saveService($request, $service);
    }

    public static function saveService($request, $service)
    {
        DB::transaction(function() use($request, $service) {

            if ($request->hasFile('file')) {
                $image_tmp = $request['file'];
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $file= time() . '.' . $extension;
                    $pathRep = $image_tmp->storeAs('public/service/', $file);
                    $pathRep = $image_tmp->storeAs('public/service/large/', $file);
                    $pathRep = $image_tmp->storeAs('public/service/medium/', $file);
                    $pathRep = $image_tmp->storeAs('public/service/small/', $file);
                    $service->file = $file;
                }
            }
            $service->price = $request['price'];
            $service->save();
            Translate::storeTranslate($request, $service->id);
        });

        return $service;
    }

    public static function deleteItemRow($id)
    {
//        $service = service::where('id',$id)->get();
//        $service = Product::where('service_id',$id)->get();
//        if(!$service->isEmpty()){
//            return false;
//        }else{
        $service = Service::where('id',$id)->delete();
        Translate::where('page_id',$id)->where('type','service')->delete();
        if ($service->file){
            unlink(public_path('storage/service/'.$service->file));
            unlink(public_path('storage/service/small/'.$service->file));
            unlink(public_path('storage/service/medium/'.$service->file));
            unlink(public_path('storage/service/large/'.$service->file));
        }
        return true;
//        }


    }

}
