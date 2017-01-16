<?php

namespace Lib;

use Lib\Router;

class bootstrap {

    /**
     * 
     */
    public function init() {

        $router = new Router();
        $route = $router->getRouter();
         
        if (!empty($route)) {
            $class = new \ReflectionClass($route['namespace']);
            if (!$class->isAbstract() && is_callable(array($route['namespace'], $route['method']))) {
                $callClass = new $route['namespace']();
                $callClass->{$route['method']}();
            } else {
                throw new \Exception("Method Called does not Exist");
            }
        }
    }

}
