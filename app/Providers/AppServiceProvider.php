<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $categories = Category::all();
        
        $menuItems = [
            [
                'title' => 'Trang chủ',
                'link' => '/'
            ]
        ];

        foreach($categories as $cat) {
            $menuItems[] = [
                'title' => $cat->name,
                'link' => "/$cat->slug"
            ];
        }

        view()->share(compact('menuItems'));
    }
}
