<?php

declare(strict_types=1);

namespace Oleksandrb\ContactUs;

use Oleksandrb\ContactUs\Controller\Form;

class Router implements \Oleksandrb\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($requestUrl === 'contact-us') {
            return Form::class;
        }
        return '';
    }
}
