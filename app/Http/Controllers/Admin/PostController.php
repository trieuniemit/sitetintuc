<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Post;
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
        $posts = Post::all();
        $posts->load('category', 'user');
        $currPage = 'posts';
        $title = 'Quản trị viên';
        return view('admin.post', compact('posts','currPage','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        $currPage = 'posts';
        $title = 'thông tin';
        return view('admin.post_create', compact('users','categories','currPage','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = new Post(); // khoi tao post moi.
        $newPost->title = $request->title;
        $newPost->desc = $request->desc;
        $newPost->thumb = $request->thumb;
        $newPost->slug = $request->slug;
        $newPost->views = 0;
        $newPost->content = $request->content;
        $newPost->category_id = $request->category;
        $newPost->user_id = $request->userID;

        $newPost->save(); //luu thong tin

        return redirect(route('posts.index'));
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
        $users = User::all();
        $post = Post::where('id', $id)->first();
        $categories = Category::all();
        $currPage = 'posts';
        $title = 'thông tin';
        return view('admin.post_edit', compact('id','users','post','categories','currPage','title'));
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
        $newPost = Post::find($id); // khoi tao post moi.
        $newPost->title = $request->title;
        $newPost->desc = $request->desc;
        $newPost->thumb = $request->thumb;
        $newPost->slug = $request->slug;
        $newPost->views = 0;
        $newPost->content = $request->content;
        $newPost->category_id = $request->category;
        $newPost->user_id = $request->userID;

        $newPost->update(); //luu thong tin

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
