<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure\Bus;


interface CommandBusContract
{
    static public function dispatch(object $command);
}
