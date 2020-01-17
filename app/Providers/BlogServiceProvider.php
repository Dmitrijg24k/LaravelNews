<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Вызов функции topMenu
        $this->topMenu();
    }

    //Top menu for users
    public function topMenu()
    {
        view::composer('layouts.header', function ($view){
            $view->with('categories', \App\Category::where('parent_id', 0)->where('published', 1)->get());
        });
    }
}
