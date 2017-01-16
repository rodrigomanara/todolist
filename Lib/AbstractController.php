<?php

namespace Lib;

use Rmanara\View\ViewClass;
use Rmanara\Model\ModelClass;
use Lib\RequestClass;

/**
 * Description of AbstractController
 *
 * @author Rodrigo Manara <me@rodrigomanara.co.uk>
 */
class AbstractController {

    /**
     *
     * @var Lib\RequestClass() 
     */
    protected $request;

    /**
     *
     * @var Rmanara\View\ViewClass
     */
    protected $view;

    /**
     *
     * @var Rmanara\Model\ModelClass
     */
    protected $model;

    /**
     * {@abstract}
     */
    public function __construct() {


        $this->view = new ViewClass();
        $this->model = new ModelClass();
        $this->request = new RequestClass();
    }

}
