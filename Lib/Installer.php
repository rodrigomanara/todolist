<?php

namespace Lib;


require_once __DIR__ . './../constant.php';
/**
 * Description of Installer
 *
 * @author ManaraR
 */
class Installer {

    //put your code here

    public static function Init() {

        $conn = mysql_connect(__host, __username, __password);
        if (!$conn) {
            die('Could not connect: ' . mysql_error());
        }
        print_r('Connected successfully');
        $sql = 'CREATE Database ' . __database;
        $retval = mysql_query($sql, $conn);

        if (!$retval) {
            die('Could not create database: ' . mysql_error());
        }

        echo "Database ". __database ." created successfully\n";
        mysql_close($conn);
    }

}
