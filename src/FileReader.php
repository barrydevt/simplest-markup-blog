<?php

namespace Barrydevt\SimplestMarkupBlog;

class FileReader
{
    public function __construct()
    {

    }

    /**
     * @return void
     * @throws \Exception
     */
    public function loadFiles()
    {
        // Check the directory exists
        if (!is_dir(app_path . 'resources'. DIRECTORY_SEPARATOR .'views')) {
            throw new \Exception(__('Bog content directory not set up'));
        }

        // If it does, loop through all the files and load their content
    }
}