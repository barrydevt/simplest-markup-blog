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
        $this->app->bind('simple-blog', function($app) {
            return new SimpleBlog();
        });
    }
}