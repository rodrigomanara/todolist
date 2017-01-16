<?php

namespace Lib;

/**
 * Description of RequestClass
 *
 * @author Rodrigo Manara <me@rodrigomanara.co.uk>
 */
class RequestClass {

    /**
     *
     * @var type 
     */
    public $server;

    /**
     *
     * @var type 
     */
    public $get;

    /**
     *
     * @var array 
     */
    public $request;

    /**
     * 
     */
    public function __construct() {
        $this->setRequest();
    }

    /**
     * 
     * @param type $id
     * @return string
     */
    public function getServer($id) {
        if (isset($this->server[$id])) {
            return $this->server[$id];
        }
        return '';
    }

    /**
     * 
     * @param type $id
     * @return string
     */
    public function get($id = null) {

        if (isset($this->get[$id])) {
            return $this->get[$id];
        }
        return '';
    }

    private function setRequest() {

        foreach (array_keys($_GET) as $var) {
            $this->get[$var] = filter_input(INPUT_GET, $var, FILTER_SANITIZE_STRING);
        }
        foreach (array_keys($_POST) as $var) {
            $this->get[$var] = filter_input(INPUT_POST, $var, FILTER_SANITIZE_STRING);
        }
        foreach (array_keys($_SERVER) as $var) {
            $this->server[$var] = filter_input(INPUT_SERVER, $var, FILTER_SANITIZE_STRING);
        }

        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getRequestUri() {
        return filter_input(INPUT_SERVER, 'REQUEST_URI');
    }
    /**
     * 
     * @param string $url
     */
    public function redirect($url) {
        header("location:{$url}");
    }

}
