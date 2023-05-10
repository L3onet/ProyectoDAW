<?php

class Rol{
    private $id_rol;
    private $nombre_rol;
    private $descripcion;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId_rol() {
        return $this->id_rol;
    }

    public function getNombre_rol() {
        return $this->nombre_rol;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setId_rol($id_rol): void {
        $this->id_rol = $this->db->real_escape_string($id_rol);
    }

    public function setNombre_rol($nombre_rol): void {
        $this->nombre_rol = $this->db->real_escape_string($nombre_rol);
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    public function read(){
        $usuarios = $this->db->query("SELECT * FROM rol");
		return $usuarios;
    }
}