<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use Carbon\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        Carbon::setLocale('vi');
        
        $lastestPosts = $this->getLastestPosts();
        $postInCats = $this->getPostInCats();

        return view('index', compact('lastestPosts', 'postInCats'));
    }

    public function getLastestPosts() {
        $lastestPosts = Post::limit(6)->orderBy("created_at", 'DESC')->get();
        $lastestPosts->load('category', 'user');
        return $lastestPosts;
    }

    public function getPostInCats() {
        $allCats = Category::all();
        $returnArr = [];
        $index = 0; 
        foreach($allCats as $cat) {
            $returnArr[] = [
                'type' => $index++ % 2 == 0? 'type-1': 'type-2',
                'catname' => $cat->name,
                'posts' => Post::where('category_id', $cat->id)->limit(5)->get()
            ];
        }

        return $returnArr;
    }
}
