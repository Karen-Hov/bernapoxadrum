<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){



        return view('front.index');
    }




    public function service(){
        return view('front.service');
    }


    public function blog(){
        return view('front.blog');
    }
    public function blog_singl(){
        return view('front.blog_singl.blade.php');
    }

    public function contact(){
        return view('front.contact.blade.php');
    }
    public function sport(){
        return view('front.sport');
    }
    public function author(){
        return view('front.author');
    }
    public function gallery(){
        return view('front.gallery');
    }
    public function gallery_singl(){
        return view('front.gallery_singl');
    }
    public function technology(){
        return view('front.technology');
    }
    public function life_style(){
        return view('front.life_style');
    }

}
