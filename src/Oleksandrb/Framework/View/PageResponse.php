<?php

declare(strict_types=1);

namespace Oleksandrb\Framework\View;

use Oleksandrb\Framework\Http\Response\Html;

class PageResponse extends Html
{
    private \Oleksandrb\Framework\View\Renderer $renderer;

    /**
     * @param \Oleksandrb\Framework\View\Renderer $renderer
     */
    public function __construct(
        \Oleksandrb\Framework\View\Renderer $renderer
    ) {
        $this->renderer = $renderer;
    }

    /**
     * @param string $contentBlogClass
     * @param string $template
     * @return PageResponse
     */
    public function setBody(string $contentBlogClass, string $template = ''): PageResponse
    {
        return parent::setBody((string) $this->renderer->setContent($contentBlogClass, $template));
    }
}
