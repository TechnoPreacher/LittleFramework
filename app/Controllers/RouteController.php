<?php

namespace Aigletter\App\Controllers;

class RouteController
{

public static function static()
{
    echo "call static method 'control' from RouteController";
}

public function dynamic(int $id = 90) :string
{
    echo "call  method 'last' from object of RouteController";
echo $id;
    return "last";
}

}