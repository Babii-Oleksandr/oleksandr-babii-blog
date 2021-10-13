<?php

declare(strict_types=1);

namespace Oleksandrb\Blog;

use Oleksandrb\Blog\Controller\Category;
use Oleksandrb\Blog\Controller\Post;

class Router implements \Oleksandrb\Framework\Http\RouterInterface
{
    private \Oleksandrb\Framework\Http\Request $request;

    /**
     * @param \Oleksandrb\Framework\Http\Request $request
     */
    public function __construct(
        \Oleksandrb\Framework\Http\Request $request
    ) {
        $this->request = $request;
    }

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        require_once '../src/data.php';

        if ($data = blogGetCategoryByUrl($requestUrl)) {
            $this->request->setParameter('category', $data);
            return Category::class;
        }

        if ($data = blogGetPostByUrl($requestUrl)) {
            $this->request->setParameter('post', $data);
            return Post::class;
        }
        return '';
    }
}
