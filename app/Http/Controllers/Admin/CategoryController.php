<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $currPage = 'categories';
        $title = 'Danh mục tin';
        return view('admin.category', compact('categories','currPage','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currPage = 'categories';
        $title = 'Thêm mới danh mục tin';
        return view('admin.category_create', compact('currPage','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->desc = $request->desc;
        $newCategory->slug = $request->slug;
        $newCategory->parent= 0;

        $newCategory->save();

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Category::find($id);
        $cat->delete();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        $currPage = 'categories';
        $title = 'Chỉnh sửa danh mục tin';
        return view('admin.category_edit', compact('id','category','currPage','title'));
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
        $newCategory = Category::find($id); // tim doi tuong can update
        $newCategory->name = $request->name;
        $newCategory->desc = $request->desc;
        $newCategory->slug = $request->slug;
        $newCategory->parent= 0;

        $newCategory->update(); //update thong tin.

        return redirect(route('categories.index'));
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
