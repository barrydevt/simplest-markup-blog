<?php

namespace Barrydevt\SimplestMarkupBlog;

use Barrydevt\SimplestMarkupBlog\BlogRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class SimplestMarkupBlogServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(){}

    /**
     * @return void
     */
    public function register()
    {
        /*
         * Bind the SimplestBlog class to the facade
         */
        $this->app->bind('simplest-blog', function($app) {
            return $this->app->make(SimplestBlog::class);
        });
        /*
         * Bind the file system repo as the blog repository
         */
        $this->app->bind(
            BlogRepositoryInterface::class,
            FileSystemRepository::class
        );
    }
}