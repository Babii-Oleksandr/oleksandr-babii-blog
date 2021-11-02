<?php

declare(strict_types=1);

namespace Oleksandrb\ContactUs\Controller;

use Oleksandrb\Framework\Http\ControllerInterface;
use Oleksandrb\Framework\Http\Response\Raw;
use Oleksandrb\Framework\View\Block;

class Form implements ControllerInterface
{
    private \Oleksandrb\Framework\View\PageResponse $pageResponse;

    /**
     * @param \Oleksandrb\Framework\View\PageResponse $pageResponse
     */
    public function __construct(
        \Oleksandrb\Framework\View\PageResponse $pageResponse
    ) {
        $this->pageResponse = $pageResponse;
    }

    /**
     * @return Raw
     */
    public function execute(): Raw
    {
        return $this->pageResponse->setBody(
            Block::class,
            '../src/Oleksandrb/ContactUs/view/contact-us.php'
        );
    }
}
