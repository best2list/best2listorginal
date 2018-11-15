<?php

namespace App\Providers;

use App\Category;
use App\Country;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //countries menu
        //$countries = Country::all();
        //Blade::directive('layouts.app')->with('countries',$countries);
        view()->composer('layouts.app', function ($view) {
            $view->with('countries', Country::all());
            $view->with('categories', Category::all());
        });
//
//        view()->composer('*', function($view) {
//            $view->with('search_categories', \App\Category::categories());
//            $view->with('categories_all', \App\Category::all());
//            $view->with('search_cities', \App\City::cities());
//
//            $view->with('countries_all', \App\Country::all());
//
//        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
