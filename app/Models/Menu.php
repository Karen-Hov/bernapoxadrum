<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['*'];

    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id')->where('type','menu');
    }
    public function post(){
        return $this->belongsTo('App/Post');
    }


    public function submenu()
    {
        return $this->hasMany(SubMenu::class);
    }




    public static function storeMenu($request)
    {
        $menu = new self();
        return self::saveMenu($request, $menu);
    }

    public static function updateMenu($request, $id)
    {
        $menu = self::find($id);
        return self::saveMenu($request, $menu);
    }

    public static function saveMenu($request, $menu)
    {
        DB::transaction(function() use($request, $menu) {
//            $menu->type = $request['cat'];
            $menu->save();
            Translate::storeTranslate($request, $menu->id);
        });

        return $menu;
    }

    public static function deleteItemRow($id)
    {
//        $menu = menu::where('id',$id)->get();
//        $menu = Product::where('menu_id',$id)->get();
//        if(!$menu->isEmpty()){
//            return false;
//        }else{
        Menu::where('id',$id)->delete();
        Translate::where('page_id',$id)->where('type','menu')->delete();
        return true;
//        }


    }

    public static function getCategories(){
        $categories =Menu::with(['translate'=>function($q){
            $q->where('code',app()->getLocale());
        }])->get();
        return $categories;
    }
}

