<?php

declare(strict_types=1);

namespace Oleksandrb\Cms;

use Oleksandrb\Cms\Controller\Page;

class Router implements \Oleksandrb\Framework\Http\RouterInterface
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

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        $cmsPage = [
            '',
            'test-page',
        ];

        if (in_array($requestUrl, $cmsPage)) {
            $this->request->setParameter('page', $requestUrl ?: 'home');
            return Page::class;
        }
        return '';
    }
}
