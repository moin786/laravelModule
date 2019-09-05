<?php

namespace App\Blog;

use Illuminate\Support\ServiceProvider;
use App\Blog\Render\Render;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();
        $this->publishView();
        $this->loadMigration();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('consumer', function($app, $consume) {
            return new ParameterRender(new $consume['consume']);
        });

        
    }

    /**
     * Publish package config file to framework config folder
     */

    protected function publishConfig() {
        
        $this->publishes([__DIR__.'/config/blog.php' => config_path('blog.php')]);
        $this->mergeConfigFrom(__DIR__.'/config/blog.php', 'blog');
        
    }

    /**
     * Load application view
     */

    public function publishView() {
        $this->loadViewsFrom(__DIR__.'/views', 'view');
    }

    /**
     * Load Application migration to create database
     */

    public function loadMigration() {
        $this->publishes([__DIR__.'/migrations/' => database_path('migrations')]);
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }
}
