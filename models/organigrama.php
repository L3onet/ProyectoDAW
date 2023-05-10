<?php

class Organigrama{
    private $id_organigrama;
    private $area;
    private $descripcion;
    private $area_depende;
    private $nivel;
    private $tipo_area;
    private $titular;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId_organigrama() {
        return $this->id_organigrama;
    }

    public function getArea() {
        return $this->area;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getArea_depende() {
        return $this->area_depende;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function getTipo_area() {
        return $this->tipo_area;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function setId_organigrama($id_organigrama): void {
        $this->id_organigrama = $this->db->real_escape_string($id_organigrama);
    }

    public function setArea($area): void {
        $this->area = $this->db->real_escape_string($area);
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    public function setArea_depende($area_depende): void {
        $this->area_depende = $this->db->real_escape_string($area_depende);
    }

    public function setNivel($nivel): void {
        $this->nivel = $this->db->real_escape_string($nivel);
    }

    public function setTipo_area($tipo_area): void {
        $this->tipo_area = $this->db->real_escape_string($tipo_area);
    }

    public function setTitular($titular): void {
        $this->titular = $this->db->real_escape_string($titular);
    }

    public function read(){
        $usuarios = $this->db->query("SELECT * FROM organigrama");
		return $usuarios;
    }
}