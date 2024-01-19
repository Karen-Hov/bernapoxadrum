<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SubMenuController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\HomeController as HomeAdminController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logout', [HomeAdminController::class,'logout']);
Route::match(['get', 'post'],'/login', [LoginController::class,'showLoginForm ']);

Route::match(['get', 'post'], '/lang/{locale}', [LangController::class,'switchLang'])->name('switchLang');

Route::get('/', function () {
    return redirect(app()->getLocale());
});



Route::prefix('my_admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeAdminController::class,'index']);
    Route::resources([
        'posts' => PostController::class,
        'about_us' => PostController::class,
        'menu' =>MenuController::class,
        'submenu' =>SubMenuController::class,
        'services' =>App\Http\Controllers\Admin\ServiceController::class,


        'contact_us' => ContactController::class,
//        'subscribe' => SubscribetAdminController::class,
    ]);
    Route::get('slider-filter-category',[PostController::class,'slayder']);

});


Route::get('upload', [ImageController::class,'index']);
Route::get('removeimg/', [ImageController::class,'removeimg']);
Route::get('uploadimg', [ImageController::class,'uploadimg']);

Route::group(['prefix' => '{locale}', 'middleware' => 'lang', 'as'=> 'site'], function () {

    Route::get('/', [HomeController::class,'index']);
    Route::get('/service/{id?}', [ServiceController::class,'index']);
    Route::get('/contact', [HomeController::class,'contact']);
    Route::post('/add-number', [HomeController::class,'contactAdd'])->name('add-number');


    Route::get('/blog', [HomeController::class,'blog']);
    Route::get('/blog_single', [HomeController::class,'blog_single']);
    Route::get('/sport', [HomeController::class,'sport']);
    Route::get('/author', [HomeController::class,'author']);
    Route::get('/gallery', [HomeController::class,'gallery']);
    Route::get('/gallery_singl', [HomeController::class,'gallery_singl']);
    Route::get('/technology', [HomeController::class,'technology']);
    Route::get('/life_style', [HomeController::class,'life_style']);


});




Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes(['register' => false]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
