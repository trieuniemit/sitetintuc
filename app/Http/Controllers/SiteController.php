<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function postDetail($catSlug, $slug, $postid) {
        $post = Post::where('slug', $slug)->first();
        $post->load('category');
        $relatedPosts = Post::where('category_id', $post->category_id)->orderByRaw('RAND()')->limit(2)->get();
        return view('post_detail', compact('post', 'relatedPosts'));
    }

    public function category($catSlug) {
        $cat = Category::where('slug', $catSlug)->first();
        $posts = Post::where('category_id', $cat->id)->get();
        return view('category', compact('posts'));
    }
}
