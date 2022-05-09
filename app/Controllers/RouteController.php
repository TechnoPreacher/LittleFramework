<?php

namespace Aigletter\App\Controllers;

class RouteController
{

public static function static()
{
    echo "call static method 'control' from RouteController";
}

public function dynamic() :string
{
    echo "call  method 'last' from object of RouteController";

    return "last";
}

}