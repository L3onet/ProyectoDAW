<?php
  class usuariosController{
  
  public function index(){
    echo "Controlador Usuario, Accion index";
  }

  public function create(){
    require_once 'views/usuario/create.php';
  }

  public function save(){
    if(isset($_POST)){
      var_dump($_POST);
    }
  }
}