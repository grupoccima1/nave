<?php

class Crud extends Conexion {
    public function mostrarDatos(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->historico;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function insertarDatos($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->historico;
            $respuesta = $coleccion->isertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}

?>