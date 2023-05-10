<?php
require_once 'models/organigrama.php';

class organigramaController{
    public function index(){
        echo "Controlador Organigrama, Accion index";
    }

    public function select(){
        $organigrama = new Organigrama();
        $organigramas = $organigrama->read();
    
        require_once 'views/organigrama/select.php';
      }

} 