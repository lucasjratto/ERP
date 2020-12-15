<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure\Bus;


interface CommandBusContract
{
    static public function dispatchNow(object $command);
}
