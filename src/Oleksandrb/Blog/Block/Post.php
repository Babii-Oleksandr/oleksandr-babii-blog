<?php

declare(strict_types=1);

namespace Oleksandrb\Blog\Block;

use Oleksandrb\Blog\Model\Post\Entity as PostEntity;
use Oleksandrb\Blog\Model\Author\Entity as AuthorEntity;

class Post extends \Oleksandrb\Framework\View\Block
{
    private \Oleksandrb\Framework\Http\Request $request;

    protected string $template = '../src/Oleksandrb/Blog/view/post.php';

    /**
     * @param \Oleksandrb\Framework\Http\Request $request
     * @param \Oleksandrb\Blog\Model\Author\Repository $authorRepository
     */
    public function __construct(
        \Oleksandrb\Framework\Http\Request $request,
        \Oleksandrb\Blog\Model\Author\Repository $authorRepository
    ) {
        $this->request = $request;
        $this->authorRepository = $authorRepository;
    }

    /**
     * @return PostEntity
     */
    public function getPost(): PostEntity
    {
        return $this->request->getParameter('post');
    }

    /**
     * @return AuthorEntity|null
     */
    public function getAuthor(): ?AuthorEntity
    {
        return $this->authorRepository->getById($this->getPost()->getAuthorId());
    }
}