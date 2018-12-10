<?php
    class NotaController{
        
        public function mostrar(){
            //Model
            require_once 'models/nota.php';
            $notac = new Nota();
            
            $notac->titulo =  'Español<br>';
            $nombre_nota = $notac->titulo;

            $notac->descripcion = 'ALGO';
            $nombre_nota = $notac->descripcion;
            
            $notas = $notac->MostrarTodos('notas');
            //View
            require_once 'views/nota/listar.php';
            


        }

        public function editar(){
            
        }

        public function borrar(){
            
        }

        public function crear(){
            require_once 'models/nota.php';
            $notac = new Nota();
            $notac->usuario_id = 1;
            $notac->titulo = "Ingles";
            $notac->descripcion = "expreciencia educativa desde php";
            $notac->Guardar();
            
            header('Location: index.php?controller=Nota&action=mostrar');
        }


    }

?>