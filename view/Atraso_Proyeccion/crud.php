<?php

class Crud extends Conexion {
    public function mostrarDatos(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->atraso;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function obtenerDocumento($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->atraso;
            $datos = $coleccion->findOne(
                                    array(
                                        '_id' => new MongoDB\BSON\ObjectId($id)
                                    )
                                );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function insertarDatos($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->atraso;
            $respuesta = $coleccion->isertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function eliminar($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->atraso;
            $respuesta = $coleccion->deleteOne(
                                        array(
                                            "_id" => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function actualizar($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->atraso;
            $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                'set' => $datos
                                            ]
                                        );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}

?>