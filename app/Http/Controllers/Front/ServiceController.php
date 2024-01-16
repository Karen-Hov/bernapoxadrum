<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($id=null){
        if(!$id){
            $id = Menu::first()->id;
        }

        $menus  = Menu::with(['translate'=>function ($q) {
            $q->where('code',app()->getLocale())->where('type','menu');
        },'submenu.translate'=>function ($s) {
            $s->where('code',app()->getLocale())->where('type','submenu');
        }]) ->get();

        $avtiv_menu =  Menu::with(['translate'=>function ($q) {
            $q->where('code',app()->getLocale())->where('type','menu');
        }]) ->find($id);


        $submenus = Menu::with(['translate'=>function ($q) {
            $q->where('code',app()->getLocale())->where('type','menu');
        },'submenu.translate'=>function ($s) {
            $s->where('code',app()->getLocale())->where('type','submenu');
        }]) ->find($id);

        $submenus = SubMenu::with(['translate'=>function ($s) {
            $s->where('code',app()->getLocale())->where('type','submenu');
        }])->where('menu_id',$id)->get();



//        dd($menus,$submenus);

        return view('front.service')->with([
            'menus'=>$menus,
            'avtiv_menu'=>$avtiv_menu,
            'submenus'=>$submenus
        ]);
    }
}
