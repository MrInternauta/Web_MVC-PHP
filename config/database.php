<?php
    class database{
        public  static function conectar(){
            $conexion = new mysqli("localhost", "root", "", "ejemplo_c");
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }

    } 


?>