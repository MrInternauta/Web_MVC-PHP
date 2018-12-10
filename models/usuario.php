<?php
    require_once 'modelobase.php';
    Class Usuario extends ModeloBase{
        public $nombres;
        public $apellido;
        public $email;
        public $pass;

        public function __construct(){
            //herede la conexion a bd
            parent::__construct();
        }
        public function GetNombre(){
            return $this->nombres;
        }
        public function SetNombre(string $nombre){
            $this->nombres =  $nombre;
        }

        public function GetApellido(){
            return $this->apellido;
        }
        public function SetApellido(string $apellido){
            $this->apellido =  $apellido;
        }

        public function GetEmail(){
            return $this->email;
        }
        public function SetEmail(string $email){
            $this->email =  $email;
        }

        public function GetPass(){
            return $this->pass;
        }
        public function SetPass(string $pass){
            $this->pass =  $pass;
        }

        
    }
?>