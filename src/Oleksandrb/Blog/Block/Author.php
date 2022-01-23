<?php

declare(strict_types=1);

namespace Oleksandrb\Blog\Block;

use Oleksandrb\Blog\Model\Author\Entity as AuthorEntity;
use Oleksandrb\Blog\Model\Post\Entity as PostEntity;

class Author extends \Oleksandrb\Framework\View\Block
{
    private \Oleksandrb\Framework\Http\Request $request;

    private \Oleksandrb\Blog\Model\Post\Repository $postRepository;

    protected string $template = '../src/Oleksandrb/Blog/view/author.php';

    /**
     * @param \Oleksandrb\Framework\Http\Request $request
     * @param \Oleksandrb\Blog\Model\Post\Repository $postRepository
     */
    public function __construct(
        \Oleksandrb\Framework\Http\Request     $request,
        \Oleksandrb\Blog\Model\Post\Repository $postRepository
    )
    {
        $this->request = $request;
        $this->postRepository = $postRepository;
    }

    /**
     * @return AuthorEntity
     */
    public function getAuthor(): AuthorEntity
    {
        return $this->request->getParameter('author');
    }

    /**
     * @return PostEntity[]
     */
    public function getAuthorPosts(): array
    {
        return $this->postRepository->getByAuthorId($this->getAuthor()->getAuthorId());
    }
}
