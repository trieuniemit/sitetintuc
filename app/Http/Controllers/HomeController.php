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
        $randomPosts = $this->getRandomPosts();
        $trendingPosts = $this->getTrendingPosts();
        $postInCats = $this->getPostInCats();

        return view('index', compact('randomPosts', 'lastestPosts', 'trendingPosts', 'postInCats'));
    }

    public function getLastestPosts() {
        $lastestPosts = Post::orderBy("created_at", 'DESC')->paginate(15);
        $lastestPosts->load('category', 'user');
        return $lastestPosts;
    }

    public function getRandomPosts() {
        $randomPosts = Post::orderByRaw("RAND()")->get();
        $randomPosts->load('category', 'user');

        return $randomPosts;
    }

    public function getTrendingPosts() {
        $randomPosts = Post::limit(5)->orderBy("views", 'DESC')->get();
        $randomPosts->load('category', 'user');

        return $randomPosts;
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
