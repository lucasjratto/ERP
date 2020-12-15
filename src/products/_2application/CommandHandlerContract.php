<?php

declare (strict_types = 1);

namespace Src\products\_2application;

interface CommandHandlerContract
{
    static public function handle(object $command);
}
