<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure\Bus\Laravel;

use Src\products\_3infrastructure\Bus\CommandBusContract;

final class CommandBus implements CommandBusContract
{
    static public function dispatchNow(object $command)
    {
        
    }

}