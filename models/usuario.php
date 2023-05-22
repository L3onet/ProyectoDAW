<?php

class Usuario{
    private $id_usuario;
    private $usuario;
    private $id_rol;
    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;
    private $id_organigrama;
    private $id_pass;
    private $estado;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getId_rol() {
        return $this->id_rol;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido_paterno() {
        return $this->apellido_paterno;
    }

    public function getApellido_materno() {
        return $this->apellido_materno;
    }

    public function getId_organigrama() {
        return $this->id_organigrama;
    }

    public function getId_pass() {
        return password_hash($this->db->real_escape_string($this->id_pass), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId_usuario($id_usuario): void {
        $this->id_usuario = $this->db->real_escape_string($id_usuario);
    }

    public function setUsuario($usuario): void {
        $this->usuario = $this->db->real_escape_string($usuario);
    }

    public function setId_rol($id_rol): void {
        $this->id_rol = $this->db->real_escape_string($id_rol);
    }

    public function setNombre($nombre): void {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function setApellido_paterno($apellido_paterno): void {
        $this->apellido_paterno = $this->db->real_escape_string($apellido_paterno);
    }

    public function setApellido_materno($apellido_materno): void {
        $this->apellido_materno = $this->db->real_escape_string($apellido_materno);
    }

    public function setId_organigrama($id_organigrama): void {
        $this->id_organigrama = $this->db->real_escape_string($id_organigrama);
    }

    public function setId_pass($id_pass): void {
        $this->id_pass = $id_pass;
    }

    public function setEstado($estado): void {
        $this->estado = $this->db->real_escape_string($estado);
    }

    public function read(){
        $usuarios = $this->db->query("SELECT A.ID_USUARIO, A.USUARIO, B.NOMBRE_ROL, A.NOMBRE, A.APELLIDO_PATERNO, A.APELLIDO_MATERNO, C.AREA, A.ESTADO FROM `usuarios` AS A INNER JOIN `rol` AS B ON A.ID_ROL = B.ID_ROL INNER JOIN `organigrama` AS C ON A.ID_ORGANIGRAMA = C.ID_ORGANIGRAMA;");
		return $usuarios;
    }

    public function readOne(){
        $usuario = $this->db->query("SELECT * FROM usuarios WHERE ID_USUARIO = '{$this->getId_usuario()}'");
        return $usuario;
    }

    public function save(){
        $sql = "INSERT INTO usuarios (USUARIO, ID_ROL, NOMBRE, APELLIDO_PATERNO, APELLIDO_MATERNO, ID_ORGANIGRAMA, PASS, ESTADO) VALUES('{$this->getUsuario()}', '{$this->getId_rol()}', '{$this->getNombre()}', '{$this->getApellido_paterno()}', '{$this->getApellido_materno()}', '{$this->getId_organigrama()}', '{$this->getId_pass()}', '{$this->getEstado()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
    }

}