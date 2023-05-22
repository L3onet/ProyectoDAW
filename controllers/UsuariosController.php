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

  public function view(){
    if(isset($_GET['id'])){
			$id = $_GET['id'];
		
			$usuario = new Usuario();
			$usuario->setId_usuario($id);
			
			$product = $producto->getOne();
			
		}
		require_once 'views/producto/ver.php';
  }

  public function save(){
    if(isset($_POST)){
      
      $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : false;
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$apellidop = isset($_POST['apellidop']) ? $_POST['apellidop'] : false;
      $apellidom = isset($_POST['apellidom']) ? $_POST['apellidom'] : false;
      $rol = isset($_POST['rol']) ? $_POST['rol'] : false;
      $organigrama = isset($_POST['organigrama']) ? $_POST['organigrama'] : false;
      $activar = isset($_POST['active']) ? $_POST['active'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;
      if($activar == 1){
        $activo = 1;
      } else {
        $activo = 0;
      }

      if($usuario && $nombre && $apellidop && $apellidom && $rol && $organigrama && $password){
        $usuarios = new Usuario();
        $usuarios->setUsuario($usuario);
        $usuarios->setNombre($nombre);
				$usuarios->setApellido_paterno($apellidop);
        $usuarios->setApellido_materno($apellidom);
        $usuarios->setId_rol($rol);
        $usuarios->setId_organigrama($organigrama);
        $usuarios->setEstado($activo);
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