<?php

namespace Rmanara\Model;

/**
 * Description of ModelClass
 *
 * @author Rodrigo Manara <me@rodrigomanara.co.uk>
 */
class ModelClass extends \Lib\AbstractModel {

    /**
     * 
     * @param array $data
     * @return type
     */
    public function save(array $data = array()) {


        $keys = array();
        $values = array();
        foreach ($data as $key => $value) {
            $keys[] = $key;
            $values[] = $this->escape($value);
        }


        $sql_input = "replace into todo (`" . implode("`,`", $keys) . "`)";
        $sql_value = "values ('" . implode("','", $values) . "');";

        return $this->query($sql_input . $sql_value);
    }

    /**
     * 
     * @return type
     */
    public function todoList() {
        $sql = "select * from todo";
        return $this->query($sql);
    }

    /**
     * 
     * @param type $id
     * @return type
     */
    public function todoListById($id = null) {
        $sql = "select * from todo where id ='" . $this->escape($id) . "';";
        return $this->query($sql);
    }

    
     /**
     * 
     * @param type $id
     * @return type
     */
    public function DeletetodoListById($id = null) {
        $sql = "delete from todo where id ='" . $this->escape($id) . "';";
        return $this->query($sql);
    }
    
}
