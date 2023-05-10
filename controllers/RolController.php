<?php
require_once 'models/rol.php';

class rolController{
    public function index(){
        echo "Controlador Rol, Accion index";
    }

    public function select(){
        $rol = new Rol();
        $roles = $rol->read();
    
        require_once 'views/rol/select.php';
      }

} 