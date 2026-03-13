<?php
include_once("modelos/usuarios.php");

class ControladorUsuarios{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuarios();
    }

    public function listar()
    {
        $listar = $this->usuario->listar();
        return $listar;
    }

    public function crear($cedula, $nombre, $apellidos, $usuario, $clave){
        $this->usuario->set("cedula",$cedula);
        $this->usuario->set("nombres",$nombre);
        $this->usuario->set("apellidos",$apellidos);
        $this->usuario->set("usuario",$usuario);
        $this->usuario->set("password",$clave);

        $resultado=$this->usuario->crear();
        return $resultado;

        
    } //fin del metodo crear

    public function consultar($id){
        $this->usuario->set("id",$id);
        return $this->usuario->consultar();
    }//fin del metodo consultar

    public function eliminar($id){
        $this->usuario->set("id",$id);
        $this->usuario->eliminar();
    }

}//fin de la clase ControladorUsuarios

?>