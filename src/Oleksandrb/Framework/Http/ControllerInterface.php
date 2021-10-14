<?php

namespace Oleksandrb\Framework\Http;

interface ControllerInterface
{
    public function execute(): string;
}