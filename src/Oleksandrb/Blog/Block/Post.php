<?php

declare(strict_types=1);

namespace Oleksandrb\Blog\Block;

use Oleksandrb\Blog\Model\Post\Entity as PostEntity;

class Post extends \Oleksandrb\Framework\View\Block
{
    private \Oleksandrb\Framework\Http\Request $request;

    protected string $template = '../src/Oleksandrb/Blog/view/post.php';

    /**
     * @param \Oleksandrb\Framework\Http\Request $request
     */
    public function __construct(
        \Oleksandrb\Framework\Http\Request $request
    ) {
        $this->request = $request;
    }

    /**
     * @return PostEntity
     */
    public function getPost(): PostEntity
    {
        return $this->request->getParameter('post');
    }
}