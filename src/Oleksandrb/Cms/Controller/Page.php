<?php

declare(strict_types=1);

namespace Oleksandrb\Cms\Controller;

class Page implements \Oleksandrb\Framework\Http\ControllerInterface
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
        $page = $this->request->getParameter('page') . '.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }

}