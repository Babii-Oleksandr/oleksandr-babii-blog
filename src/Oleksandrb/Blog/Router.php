<?php

declare(strict_types=1);

namespace Oleksandrb\Blog;

use Oleksandrb\Blog\Controller\Category;
use Oleksandrb\Blog\Controller\Post;

class Router implements \Oleksandrb\Framework\Http\RouterInterface
{
    private \Oleksandrb\Framework\Http\Request $request;

    private Model\Category\Repository $categoryRepository;

    private Model\Post\Repository $postRepository;

    /**
     * @param \Oleksandrb\Framework\Http\Request $request
     * @param Model\Category\Repository $categoryRepository
     * @param Model\Post\Repository $postRepository
     */
    public function __construct(
        \Oleksandrb\Framework\Http\Request $request,
        \Oleksandrb\Blog\Model\Category\Repository $categoryRepository,
        \Oleksandrb\Blog\Model\Post\Repository $postRepository
    ) {
        $this->request = $request;
        $this->categoryRepository = $categoryRepository;
        $this->postRepository = $postRepository;
    }

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($category = $this->categoryRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('category', $category);
            return Category::class;
        }

        if ($post = $this->postRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('post', $post);
            return Post::class;
        }

        return '';
    }
}
