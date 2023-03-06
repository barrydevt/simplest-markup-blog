<?php

namespace Barrydevt\SimplestMarkupBlog;

use Illuminate\Support\Facades\File;

class FileReader
{
    /**
     * @param FileParser $fileParser
     */
    public function __construct(FileParser $fileParser)
    {
        $this->fileParser = $fileParser;
    }

    /**
     * @return void
     * @throws \Exception
     */
    public function getFilesFromBlogDirectory(): array
    {
        if (!is_dir($blogFilePath = resource_path('views/_blog'))) {
            throw new \Exception(__('Blog content directory not set up'));
        }

        foreach(File::allFiles($blogFilePath) as $file)
        {
            $blogs[] = $this->getFileFromBlogDirectory($file->getBasename('.blade.php'));
        }

        return $blogs;
    }

    /**
     * @param string $title
     * @return BlogPostDto
     * @throws \Exception
     */
    public function getFileFromBlogDirectory(string $title): BlogPostDto
    {
        if (!is_dir($blogFilePath = resource_path('views/_blog'))) {
            throw new \Exception(__('Blog content directory not set up'));
        }

        $fileToGet = $blogFilePath . DIRECTORY_SEPARATOR . $title . '.blade.php';

        $fileContents = File::get($fileToGet);
        return $this->fileParser->createBlogObject($fileContents, $title);
    }
}