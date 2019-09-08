<?php

namespace App\Core;
use App\Core\Config;

class Router {

    function __construct()
    {
        $this->controllerName = ($_GET["t"] ?? Config::DEFAULT_CONTROLLER) . 'Controller';
        $this->actionName = 'action' . ($_GET["a"] ?? Config::DEFAULT_ACTION);
        // $view = 'siteView';
    }

    public function run() {

       $className = "App\\Controller\\{$this->controllerName}";

        if (class_exists($className)) {
            $MVC = new $className();

            if (method_exists($MVC, $this->actionName)) {
                $MVC->{$this->actionName}();
            } else {
                echo "нет такого метода: $this->actionName";
            }
        } else {
            echo "нет такого класса: $this->controllerName";
        }

    }

    

}

?>