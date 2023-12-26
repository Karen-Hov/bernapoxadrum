<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubMenu;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::with(['categorys.translate'])->orderBy('id','desc')->paginate(20);
       return view('admin.posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = SubMenu::with(['translate'=>function ($q){
            $q->where('code','hy')->where('type','submenu');
        }])->get();
        return view('admin.posts.create')->with(['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::storePost($request);
        return redirect('/my_admin/posts/')->with('flash_message_success','Նորությունը հաջողությամբ ավելացվել է ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('admin.posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = SubMenu::with(['translate'=>function ($q){
            $q->where('code','hy');
        }])->get();
        $post= Post::with(['categorys.translate'])->find($id);
//        dd($id,$post);
        return view('admin.posts.edit')->with(['post'=> $post,'categories'=> $categories]);
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
        Post::updatePost($request,$id);
        return redirect('/my_admin/posts/')->with('flash_message_success','Հրապարակումը հաջողությամբ խմբագրված է ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::deleteItemRow($id);
        return response()->json(['status'=>$post]);
    }

    public function slayder(Request $request)
    {
        $post = Post::slayd_change($request);
        return $post;
    }
}
