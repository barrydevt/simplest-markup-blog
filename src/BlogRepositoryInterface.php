<?php

namespace Barrydevt\SimplestMarkupBlog;

interface BlogRepositoryInterface
{
    public function all();

    public function get(string $id);
}