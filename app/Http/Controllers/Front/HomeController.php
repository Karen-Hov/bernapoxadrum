<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateNumber;
use App\Models\Menu;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        $menus  = Menu::with(['translate'=>function ($q) {
            $q->where('code',app()->getLocale())->where('type','menu');
        },'submenu.translate'=>function ($s) {
            $s->where('code',app()->getLocale())->where('type','submenu');
        }]) ->get();

        $services = Service::with(['translate'=>function ($q) {
            $q->where('code',app()->getLocale())->where('type','service');
        }])->orderBy('id','asc')->get();


        return view('front.index')->with([
            'menus'=>$menus,
            'services'=>$services
        ]);

    }

    public function contact(){
        return view('front.contact');
    }

     public function contactAdd(PostCreateNumber $request){
         try {
             DB::table('contact')->insert( ["phone" => $request->phone]);
             return Redirect::back()->with('create_number','true');
         } catch (Exception $ex) {
             echo $ex->getMessage();
         }

        }

}
