<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submenu = SubMenu::with(['translate'=>function ($q){
            $q->where('code','hy')->where('type','submenu');
        },'menu.translate'])->orderBy('id','desc')->get();



//        $posts= Post::with(['translate'=>function ($q){
//            $q->where('code','hy')->where('type','post');
//        },'categorys.translate'])->get();

//        dd($submenu);
        return view('admin.submenu.index')->with(['submenu'=>$submenu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::with('translate')->get();
//        dd($menu);

        return view('admin.submenu.create')->with('menu',$menu);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request->all());
        SubMenu::storeSubMenu($request);
        return redirect('/my_admin/submenu/')->with('flash_message_success','Կատեգորիան հաջողությամբ ավելացվել է ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::with(['translate'=>function ($q){
            $q->where('code','hy')->where('type','menu');
        }])->get();
        $submenu = SubMenu::with('translate')->find($id);
        return view('admin.submenu.edit')->with(['submenu'=>$submenu,'menu'=>$menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        SubMenu::updateSubMenu($request,$id);
        return redirect('/my_admin/submenu/')->with('flash_message_success','Կատեգորիան հաջողությամբ Խմբագրվել է ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $val = SubMenu::deleteItemRow($id);
        return response()->json(['status'=>$val]);
    }
}
