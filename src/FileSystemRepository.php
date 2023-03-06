<?php

namespace Barrydevt\SimplestMarkupBlog;

use Barrydevt\SimplestMarkupBlog\BlogRepositoryInterface;
use Illuminate\Support\Collection;

class FileSystemRepository implements BlogRepositoryInterface
{
    /**
     * @var FileReader
     */
    public $fileReader;

    /**
     * @param FileReader $fileReader
     */
    public function __construct(FileReader $fileReader)
    {
        $this->fileReader = $fileReader;
    }

    /**
     * @return Collection
     * @throws \Exception
     */
    public function all(): Collection
    {
        $files = collect($this->fileReader->getFilesFromBlogDirectory());

        return $files;
    }

    /**
     * @param array $posts
     * @return void
     */
    public function get(string $title)
    {
        $file = $this->fileReader->getFileFromBlogDirectory($title);

        return $file;
    }
}