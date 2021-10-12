<?php

declare(strict_types=1);

namespace DVCampus\Blog;

use DVCampus\Blog\Controller\Category;
use DVCampus\Blog\Controller\Post;

class Router implements \DVCampus\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
//        require_once '../src/data.php';
//
//        if ($data = blogGetCategoryByUrl($requestUri)) {
//            return Category::class;
//        }
//
//        if ($data = blogGetPostByUrl($requestUri)) {
//            return Post::class;
//        }
        return '';
    }
}