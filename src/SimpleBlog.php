<?php

namespace Barrydevt\SimplestMarkupBlog;

class SimpleBlog
{
    /**
     * @var FileReader
     */
    private $fileReader;

    /**
     * @param FileReader $fileReader
     */
    public function __construct(FileReader $fileReader)
    {
        $this->fileReader = $fileReader;
    }

    public function list()
    {
        dd($this->fileReader->loadFiles());
    }
}