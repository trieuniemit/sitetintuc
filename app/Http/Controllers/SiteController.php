<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function postDetail($catSlug, $slug, $postid) {
        $post = Post::where('slug', $slug)->first();
        $post->load('category');
        $relatedPosts = Post::where('category_id', $post->category_id)->orderByRaw('RAND()')->limit(2)->get();
        return view('post_detail', compact('post', 'relatedPosts'));
    }
}
