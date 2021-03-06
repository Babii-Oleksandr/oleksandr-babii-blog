<?php

declare(strict_types=1);

namespace Oleksandrb\ContactUs\Controller;

use Oleksandrb\Framework\Http\ControllerInterface;

class Form implements ControllerInterface
{
    public function execute(): string
    {
        $page = 'contact-us.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}