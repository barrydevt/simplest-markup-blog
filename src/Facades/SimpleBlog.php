<?php

namespace Barrydevt\SimplestMarkupBlog\Facades;

use Illuminate\Support\Facades\Facade;

class SimpleBlog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'simple-blog';
    }
}