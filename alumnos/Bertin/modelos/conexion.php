<?php
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=pos", "root", "");
        $link->exec("set names utf8");
        return $link;

<<<<<<< HEAD
    static public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=pos",
                        "root",
                        "");
        
        $link->exec("set names utf8");

        return $link;

=======
>>>>>>> 1f4d978efd87e3e43e77f077658409d080308090
    }
}