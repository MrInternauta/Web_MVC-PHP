<?php
class UsuarioController {

    public function mostrar(){
        require_once 'models/usuario.php';
        $usuarioc = new Usuario();
        $usuarios = $usuarioc->MostrarTodos('usuarios');
        require_once 'views/usuario/mostrar.php';
    }

    public function crear(){
        require_once 'views/usuario/crear.php';
    }
}

?>