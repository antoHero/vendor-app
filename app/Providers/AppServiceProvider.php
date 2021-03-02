<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Suggestion;
use App\Models\Review;
use App\Models\User;

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
        Schema::DefaultStringLength(191);
        View::composer('*', function($view) {
            $view->with('product_count', Product::count());
            $view->with('shop_count', Shop::count());
            $view->with('suggestion_count', Suggestion::count());
            $view->with('review_count', Review::count());
            $view->with('user_count', User::count());
            $view->with('admin_products', Product::all());
            $view->with('admin_reviews', Review::all());
            $view->with('admin_suggestions', Suggestion::all());
        });
    }
}
