<?php

namespace Barrydevt\SimplestMarkupBlog;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class FileParser
{
    /**
     * @param string $fileContent
     * @return BlogPostDto
     */
    public function createBlogObject(string $fileContent, $filename): BlogPostDto
    {
        $matches = explode('====', $fileContent);

        list($createdAt, $title, $excerpt, $thumbnail) = explode("\n", $matches[0]);

        $content = $matches[1];

        return new BlogPostDto(
            $title,
            $excerpt,
            $content,
            $fileContent,
            $thumbnail,
            Carbon::parse($createdAt),
            '/articles/'.$filename
        );
    }
}