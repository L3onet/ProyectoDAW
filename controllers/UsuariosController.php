<?php
require_once 'models/usuario.php';

  class usuariosController{
  
  public function index(){
    echo "Controlador Usuario, Accion index";
  }

  public function create(){
    require_once 'views/usuario/create.php';
  }

  public function read(){
    $usuario = new Usuario();
		$usuarios = $usuario->read();

    require_once 'views/usuario/read.php';
  }

  public function save(){
    if(isset($_POST)){
      
      $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : false;
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$apellidop = isset($_POST['apellidop']) ? $_POST['apellidop'] : false;
      $apellidom = isset($_POST['apellidom']) ? $_POST['apellidom'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;

      if($usuario && $nombre && $apellidop && $apellidom && $password){
        $usuarios = new Usuario();
        $usuarios->setUsuario($usuario);
        $usuarios->setNombre($nombre);
				$usuarios->setApellido_paterno($apellidop);
        $usuarios->setApellido_materno($apellidom);
				$usuarios->setId_pass($password);
        $save = $usuarios->save();

        if($save){
					echo "Registro completado";
				}else{
					echo "Registro fallido";
				}
      }
    }
  }
}