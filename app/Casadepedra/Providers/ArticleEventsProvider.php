<?php namespace Casadepedra\Providers;

use Illuminate\Support\ServiceProvider;
use Cache;
use Config;
use Event;

class ArticleEventsProvider extends ServiceProvider {
    
    public function register()
    {
    //
    }

    public function boot()
    {
        Event::listen('article.update',function($article){
            $category_key = Config::get('cache.prefix') . url($article->category->slug);
            $article_key = Config::get('cache.prefix') . url($article->category->slug . '/' . $article->slug);
            $home_key = Config::get('cache.prefix') . url('/');
            
            Cache::forget($category_key);
            Cache::forget($article_key);
            Cache::forget($home_key);
        });
    }
}