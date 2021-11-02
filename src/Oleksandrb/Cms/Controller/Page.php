<?php

declare(strict_types=1);

namespace Oleksandrb\Cms\Controller;

use Oleksandrb\Framework\Http\Response\Raw;
use Oleksandrb\Framework\View\Block;

class Page implements \Oleksandrb\Framework\Http\ControllerInterface
{
    private \Oleksandrb\Framework\Http\Request $request;

    private \Oleksandrb\Framework\View\PageResponse $pageResponse;

    /**
     * @param \Oleksandrb\Framework\Http\Request $request
     * @param \Oleksandrb\Framework\View\PageResponse $pageResponse
     */
    public function __construct(
        \Oleksandrb\Framework\Http\Request $request,
        \Oleksandrb\Framework\View\PageResponse $pageResponse
    ) {
        $this->pageResponse = $pageResponse;
        $this->request = $request;
    }

    /**
     * @return Raw
     */
    public function execute(): Raw
    {
        return $this->pageResponse->setBody(
            Block::class,
            '../src/Oleksandrb/Cms/view/' . $this->request->getParameter('page') . '.php'
        );
    }
}
