<?php

namespace Barrydevt\SimplestMarkupBlog\Facades;

use Illuminate\Support\Facades\Facade;

class SimplestBlog extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'simplest-blog';
    }
}