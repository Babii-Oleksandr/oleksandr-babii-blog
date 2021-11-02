<?php

declare(strict_types=1);

namespace Oleksandrb\Framework\Http;

use Oleksandrb\Framework\Http\Response\Raw;

interface ControllerInterface
{
    public function execute(): Raw;
}
