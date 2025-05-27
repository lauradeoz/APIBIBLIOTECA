<?php
/**
 * crear la clase Usuario con los siguientes atributos:
 * id, nombre, password, email, activo(booleano)
 * 
 * TODOS los atributos tienen que ser privados
 * 
 * crear un contructor con todos los campos y activo con valor true por defecto
 * crear los getters para todos los atributos
 * crear setters para password y activo
 * crear un toString que muestre los datos de Usuario
 */



class Usuario{
    //definir los atributos
    private $id;
    private $nombre;
    private $password;
    private $email;
    private $activo;


    public function __construct($id, $nombre, $password, $email, $activo){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->password = $password;
        $this->email = $email;
        $this->activo = $activo;
    }


    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function isActivo(){
        return $this->activo;
    }

        
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setPassword($password){
        $this->password = $password;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setActivo($activo){
        $this->activo = $activo;
    }


    public function __toString(){
        $activo = $this->activo ? "Sí" : "No";
        return ' Id: ' . $this->id . ' Nombre: ' . $this->nombre .  ' Email: ' . $this->email . "¿Está activo?" . $activo;
    }

}