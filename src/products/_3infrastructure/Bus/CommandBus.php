<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure\Bus;


final class CommandBus implements CommandBusContract
{

    static public function dispatch(object $command)
    {
        $Handler = BusConfig::getConfigHandler($command);
        return $Handler::handle($command);
    }
}
