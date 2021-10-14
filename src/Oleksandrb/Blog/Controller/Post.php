<?php

namespace Oleksandrb\Blog\Controller;

use Oleksandrb\Framework\Http\ControllerInterface;

class Post implements ControllerInterface
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

    public function execute(): string
    {
        $data = $this->request->getParameter('post');
        $page = 'post.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}