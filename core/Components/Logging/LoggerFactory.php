<?php

namespace Aigletter\Framework\Components\Logging;

use Aigletter\Contracts\ComponentFactory;
use donkeylogger\FileFormatter;
use Mursalov\Logger\FileWriter;
use Mursalov\Logger\Formatter;
use Mursalov\Logger\Logger;


class LoggerFactory extends ComponentFactory
{



    protected function createConcreteComponent()
    {
        $formatter = new FileFormatter();
        $writer = new \donkeylogger\FileWriter($formatter);
        $logger = new \donkeylogger\Logger($writer);
        return $logger;
    }
}