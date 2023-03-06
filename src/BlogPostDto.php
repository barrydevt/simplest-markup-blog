<?php

namespace Barrydevt\SimplestMarkupBlog;

use Illuminate\Support\Carbon;

class BlogPostDto
{
    /**
     * @param string $title
     * @param string $excerpt
     * @param string $content
     * @param string $raw
     * @param string $thumbnail
     * @param Carbon $created_at
     */
    public function __construct(
        public string $title,
        public string $excerpt,
        public string $content,
        public string $raw,
        public string $thumbnail,
        public Carbon $created_at,
        public string $url
    ){}
}
