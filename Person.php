<?php

class Persona
{

    private $nombre;
    private $apellido;
    private $edad;


    public function __construct( $nombre, $apellido, $edad ){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    //getter de nombre
    public function get_nombre(){
        return $this->nombre;
    }

    //setter de nombre
    public function set_nombre( $nuevo_nombre ){
        $this->nombre = $nuevo_nombre;
    }

    //getter de apellido
    public function get_apellido(){
        return $this->apellido;
    }

    //setter de apellido
    public function set_apellido( $nuevo_apellido ){
        $this->apellido = $nuevo_apellido;
    }

    //getter de edad
    public function get_edad(){
        return $this->edad;
    }

    //setter de edad
    public function set_edad( $nuevo_edad ){
        $this->edad = $nuevo_edad;
    }

    //retorna true si es mayor de edad, false si es menor de edad
    public function es_mayor_de_edad(){
        if( $this->edad > 17 )
            return true;
        else
            return false;
    }

    //retorna el nombre completo de la persona
    public function nombre_completo(){
        return "{$this->nombre} {$this->apellido}";
    }

}

//instanciando la clase
$Carlos = new Persona( "Carlos", "Alvarez", 25 );

echo "Nombre: " . $Carlos->get_nombre() . "\n";
echo "Apellido: " . $Carlos->get_apellido() . "\n";
echo "Edad: " . $Carlos->get_edad() . "\n";

if( $Carlos->es_mayor_de_edad() )
    echo $Carlos->nombre_completo() . " es mayor de edad";
else
    echo $Carlos->nombre_completo() . " es menor de edad";
