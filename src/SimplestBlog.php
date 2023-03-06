<?php

namespace Barrydevt\SimplestMarkupBlog;

use Barrydevt\SimplestMarkupBlog\BlogRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class SimplestBlog
{
    /**
     * @var BlogRepositoryInterface
     */
    public $blogRepository;

    /**
     * @param FileReader $fileReader
     */
    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->blogRepository->all();
    }

    /**
     * @return Collection
     */
    public function get(string $title): BlogPostDto
    {
        return $this->blogRepository->get($title);
    }
}