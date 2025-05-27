<?php

class Libro {
    //definimos los atributos
    private $id;
    private $titulo;
    private $autor;
    private $genero;
    private $fecha_publicacion;
    private $disponible;

    public function __construct($id, $titulo, $autor, $genero, $fecha_publicacion, $disponible =true)
    
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->disponible = $disponible;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getFechaPublicacion(){
        return $this->fecha_publicacion;
    }
    public function isDisponible(){ //se cambia porque es booleano
        return $this->disponible;
    }




    public function setDisponible($disponible){
        $this->disponible = $disponible;
    }

    public function setGenero($genero){
        //historia aventura
        if($genero === 'historia'){
            $this->genero = $genero;
        }
        if($genero === 'aventura'){
            $this->genero = $genero;
        }

    }

    public function getAntiguedad(){
        $anyo_actual = date('Y');
        //al año actual le resto el año de publicación
        return $anyo_actual - $this->fecha_publicacion;
    }

    public function toString(){
        return 'Título: ' . $this->titulo . ' Autor: ' . $this->autor . ' Genero: ' . $this->genero;
    }
    

}