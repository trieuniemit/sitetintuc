<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Post;
use Auth;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\MessageBag;


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
        $title = 'Bài viết';
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
        $title = 'Thêm bài viết';
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

        $rule = [
            'title' => 'required|max:191',
            'desc' => 'required|max:65535',
            'thumb' => 'required|image',
            'slug' => 'required|max:65535',
            'content' => 'required|max:65535'
        ];

        $messenger = [
            'title.required' => 'Tiêu đề không được để trống.',
            'title.max' => 'Tiêu đề không quá 191 ký tự.',
            'desc.required' => 'Không được để trống phần mô tả.',
            'desc.max' => 'Mô tả không quá 65535 ký tự.',
            'thumb.required' => 'không được để trống phần ảnh',
            'thumb.image' => 'file ảnh phải có định dạng jpeg, png, bmp, gif hoặc svg',
            'slug.required' => 'Slug không được để trống.',
            'slug.max' => 'Slug không quá 65535 ký tự',
            'content.required' => 'Nội dung không được để trống.',
            'content.max' => 'nội dung không quá 65535 ký tự',
        ];

        $validator = Validator::make($request->all(),$rule,$messenger);

        if (!$validator->fails()) {
            $file = $request->thumb;
            $file->move(public_path().'/uploads/', $file->getClientOriginalName());

            $newPost = new Post(); // khoi tao post moi.
            $newPost->title = $request->title;
            $newPost->desc = $request->desc;
            $newPost->thumb = $file->getClientOriginalName();
            $newPost->slug = $request->slug;
            $newPost->views = 0;
            $newPost->content = $request->content;
            $newPost->category_id = $request->category;
            $newPost->user_id = Auth::get()->id;

            $newPost->save(); //luu thong tin

            return redirect(route('posts.index'));
        } else {
            return redirect(route('posts.create'))
                ->withErrors($validator)
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('111');
        $post = Post::find($id);
        $post->delete();
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
        $title = 'Chỉnh sửa bài viết';
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
        $rule = [
            'title' => 'required|max:191',
            'desc' => 'required|max:65535',
            'thumb' => 'image',
            'slug' => 'required|max:65535',
            'content' => 'required|max:65535'
        ];

        $messenger = [
            'title.required' => 'Tiêu đề không được để trống.',
            'title.max' => 'Tiêu đề không quá 191 ký tự.',
            'desc.required' => 'Không được để trống phần mô tả.',
            'desc.max' => 'Mô tả không quá 65535 ký tự.',
            'thumb.image' => 'file ảnh phải có định dạng jpeg, png, bmp, gif hoặc svg',
            'slug.required' => 'Slug không được để trống.',
            'slug.max' => 'Slug không quá 65535 ký tự',
            'content.required' => 'Nội dung không được để trống.',
            'content.max' => 'nội dung không quá 65535 ký tự',
        ];

        $validator = Validator::make($request->all(),$rule,$messenger);

        if (!$validator->fails()) {
            $newPost = Post::findOrFail($id); // khoi tao post moi.
            // dd($request->thumb);
            if($request->thumb) {
                $file = $request->thumb;
                $file->move(public_path().'/uploads/', $file->getClientOriginalName());
                $newPost->thumb = $file->getClientOriginalName();
            }

            $newPost->title = $request->title;
            $newPost->desc = $request->desc;
            $newPost->slug = $request->slug;
            $newPost->content = $request->content;
            $newPost->category_id = $request->category;
            $newPost->user_id = Auth::user()->id;
            $newPost->update(); //luu thong tin

            return redirect(route('posts.index'));
        } else {
            return redirect("/admin/posts/$id/edit")
                ->withErrors($validator)
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect(route('posts.index'));
    }
}
