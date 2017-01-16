<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lib;

/**
 * Description of Router
 *
 * @author Rodrigo Manara <me@rodrigomanara.co.uk>
 */
class Router extends RequestClass {

    public $router;

    public function __construct() {
        parent::__construct();

        $parse = parse_ini_file(ROUTER . "router.ini");
        foreach ($parse as $key => $router) {
            $this->router[$key] = $router;
        }
    }

    public function getRouter() {
         
        foreach ($this->router as $router) {
            
            if (strpos($router['router'], "{slug}") !== false) {
                $router['router'] = preg_replace('/{slug}/', $this->get('id'), $router['router'], -1);
            }  
            if ($router['router'] === $this->getRequestUri()) {
                return $router;
            }
        }
        return '';
    }

}
