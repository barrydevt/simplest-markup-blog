<?php

namespace Barrydevt\SimplestMarkupBlog;

use Illuminate\Support\ServiceProvider;

class SimplestMarkupBlogServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app()->bind(FileReader::class, function() {
            return new FileReader();
        });

        $this->app->bind('simple-blog', function($app) {
            return new SimpleBlog();
        });
    }
}