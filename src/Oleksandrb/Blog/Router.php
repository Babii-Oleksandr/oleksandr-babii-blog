<?php

declare(strict_types=1);

namespace Oleksandrb\Blog;

use Oleksandrb\Blog\Controller\Author;
use Oleksandrb\Blog\Controller\Category;
use Oleksandrb\Blog\Controller\Post;

class Router implements \Oleksandrb\Framework\Http\RouterInterface
{
    private \Oleksandrb\Framework\Http\Request $request;

    private \Oleksandrb\Blog\Model\Author\Repository $authorRepository;

    private \Oleksandrb\Blog\Model\Category\Repository $categoryRepository;

    private \Oleksandrb\Blog\Model\Post\Repository $postRepository;

    /**
     * @param \Oleksandrb\Framework\Http\Request $request
     * @param \Oleksandrb\Blog\Model\Author\Repository $authorRepository,
     * @param \Oleksandrb\Blog\Model\Category\Repository $categoryRepository,
     * @param \Oleksandrb\Blog\Model\Post\Repository $postRepository
     */
    public function __construct(
        \Oleksandrb\Framework\Http\Request $request,
        \Oleksandrb\Blog\Model\Author\Repository $authorRepository,
        \Oleksandrb\Blog\Model\Category\Repository $categoryRepository,
        \Oleksandrb\Blog\Model\Post\Repository $postRepository
    ) {
        $this->request = $request;
        $this->authorRepository = $authorRepository;
        $this->categoryRepository = $categoryRepository;
        $this->postRepository = $postRepository;
    }

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($author = $this->authorRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('author', $author);
            return Author::class;
        }

        if ($category = $this->categoryRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('category', $category);
            $this->request->setParameter('posts', $this->postRepository->getByIds($category->getPostsIds()));
            return Category::class;
        }

        if ($post = $this->postRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('post', $post);
            return Post::class;
        }

        return '';
    }
}
