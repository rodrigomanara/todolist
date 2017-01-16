<?php

namespace Rmanara\View;

/**
 * Description of ViewClass
 *
 * @author Rodrigo Manara <me@rodrigomanara.co.uk>
 */
class ViewClass {

    /**
     * 
     * @param type $filename
     * @param array $args
     */
    public function render($filename = null, array $args = array()) {

        $path = RESOURCES  . $filename;
         
        if (is_file($path)) {
            
          
            ob_start();
            include_once $path;
            $data = ob_get_contents();
            ob_clean();
            
            echo $data;
        }else{
            throw new Exception("please check the file, view is not set properly");
        }
    }

}
