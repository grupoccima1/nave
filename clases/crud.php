<?php

class Crud extends Conexion {
    // public function mostrarDatos(){
    //     try {
    //         $conexion = parent::conectar();
    //         $coleccion = $conexion->atraso;
    //         $datos = $coleccion->find();
    //         return $datos;
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }

    // public function mostrarDatosnaves(){
    //     try {
    //         $conexion = parent::conectar();
    //         $coleccion = $conexion->naves;
    //         $datos = $coleccion->find();
    //         return $datos;
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }

    // public function mostrarDatosgeneral(){
    //     try {
    //         $conexion = parent::conectar();
    //         $coleccion = $conexion->general;
    //         $datos = $coleccion->find();
    //         return $datos;
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }

    // public function mostrarDatosco1(){
    //     try {
    //         $conexion = parent::conectar();
    //         $coleccion = $conexion->cobranza1;
    //         $datos = $coleccion->find();
    //         return $datos;
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }

    // public function mostrarDatosco(){
    //     try {
    //         $conexion = parent::conectar();
    //         $coleccion = $conexion->cobranza;
    //         $datos = $coleccion->find();
    //         return $datos;
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }

    // public function obtenerDocumento($id) {
    //     try {
    //         if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
    //             throw new Exception('El ID no tiene el formato correcto');
    //         }
    //         $conexion = parent::conectar();
    //         $coleccion = $conexion->atraso;
    //         $datos = $coleccion->findOne(
    //                                 array(
    //                                     '_id' => new MongoDB\BSON\ObjectId($id)
    //                                 )
    //                             );
    //         return $datos;
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }

    // public function insertarDatos($datos){
    //     try {
    //         $conexion = parent::conectar();
    //         $coleccion = $conexion->atraso;
    //         $respuesta = $coleccion->insertOne($datos);
    //         return $respuesta;
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }
    public function consultarDatosNaves() {
        try {
            $conexion = $this->conectar();
    
            $query = "
                SELECT
                    YEAR(FECHA_FIRMA) AS year,
                    SUM(COALESCE(TOTAL, 0)) AS totalSum,
                    SUM(COALESCE(COBRADO, 0)) AS cobradoSum,
                    SUM(COALESCE(DEUDA_CAPITAL, 0)) AS deudaCapitalSum
                FROM
                    base_madre_navetec
                WHERE
                    FECHA_FIRMA IS NOT NULL
                    AND TOTAL IS NOT NULL
                    AND COBRADO IS NOT NULL
                    AND DEUDA_CAPITAL IS NOT NULL
                GROUP BY
                    YEAR(FECHA_FIRMA)
                ORDER BY
                    year ASC
            ";
    
            $resultado = mysqli_query($conexion, $query);
    
            if ($resultado) {
                $datos = [];
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $datos[] = $fila;
                }
                return $datos;
            } else {
                throw new \Exception('Error al consultar datos de naves: ' . mysqli_error($conexion), mysqli_errno($conexion));
            }
        } catch (\Throwable $th) {
            // Manejo de errores mejorado
            throw new \Exception('Error al consultar datos de naves: ' . $th->getMessage(), $th->getCode());
        }
    }
    
    
    public function obtenerDatosNavesComoJSON() {
        try {
            $datos = $this->consultarDatosNaves();
            return json_encode($datos, JSON_THROW_ON_ERROR);
        } catch (\Throwable $th) {
            // Manejo de errores mejorado
            return json_encode(['error' => $th->getMessage(), 'code' => $th->getCode()], JSON_THROW_ON_ERROR);
        }
    }
    
    
//     public function obtenerDatosNavesComoJSON() {
//         try {
//             $datos = $this->consultarDatosNaves();
//             return json_encode($datos, JSON_THROW_ON_ERROR);
//         } catch (\Throwable $th) {
//             // Manejo de errores mejorado
//             return json_encode(['error' => $th->getMessage(), 'code' => $th->getCode()], JSON_THROW_ON_ERROR);
//         }
//     }

public function consultarEntregasPorConjunto() {
    try {
        $conexion = parent::conectar();

        $query = "SELECT
                    CONJUNTO,
                    SUM(CASE WHEN ESTATUS_ENTREGA = 'ENTREGADO' THEN 1 ELSE 0 END) AS entregado,
                    SUM(CASE WHEN ESTATUS_ENTREGA = 'PENDIENTE' THEN 1 ELSE 0 END) AS pendiente
                  FROM
                    base_madre_navetec
                  WHERE
                    ESTATUS_ENTREGA IN ('ENTREGADO', 'PENDIENTE')
                  GROUP BY
                    CONJUNTO";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $datos;
        } else {
            throw new \Exception('Error al consultar entregas por conjunto: ' . $conexion->error, $conexion->errno);
        }
    } catch (\Throwable $th) {
        throw new \Exception('Error al consultar entregas por conjunto: ' . $th->getMessage(), $th->getCode());
    }
}


    
  
    
public function consultarPorcentajeEstados() {
    try {
        $conexion = parent::conectar();

        $query = "SELECT
        ESTATUS,
        COUNT(*) AS count,
        COUNT(*) / (SELECT COUNT(*) FROM cobranza_navetec WHERE ESTATUS IN ('AL CORRIENTE', 'MOROSO')) * 100 AS porcentaje
    FROM
        cobranza_navetec
    WHERE
        ESTATUS IN ('AL CORRIENTE', 'MOROSO')
    GROUP BY
        ESTATUS;
    ";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            $total = array_sum(array_column($datos, 'count'));

            $porcentajes = array_map(function ($estado) use ($total) {
                return [
                    'ESTATUS' => $estado['ESTATUS'],
                    'porcentaje' => ($total == 0) ? null : ($estado['count'] * 100) / $total,
                ];
            }, $datos);

            return ['total' => $total, 'porcentajes' => $porcentajes];
        } else {
            throw new \Exception('Error al obtener porcentaje de estados: ' . $conexion->error, $conexion->errno);
        }
    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener porcentaje de estados: ' . $th->getMessage(), $th->getCode());
    }
}

public function obtenerDatosPorConjuntoYEstado() {
    try {
        $conexion = parent::conectar();

        $query = "SELECT
                    CONJUNTO,
                    ESTATUS,
                    COUNT(*) AS count
                  FROM
                    cobranza_navetec
                  WHERE
                    ESTATUS IN ('AL CORRIENTE', 'MOROSO')
                  GROUP BY
                    CONJUNTO, ESTATUS";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $resultados = $resultado->fetch_all(MYSQLI_ASSOC);
            $agrupadosPorConjunto = [];

            foreach ($resultados as $resultado) {
                $conjunto = $resultado['CONJUNTO'];
                $estatus = $resultado['ESTATUS'];
                $count = $resultado['count'];

                if (!isset($agrupadosPorConjunto[$conjunto])) {
                    $agrupadosPorConjunto[$conjunto] = ['_id' => $conjunto, 'estados' => []];
                }

                $agrupadosPorConjunto[$conjunto]['estados'][] = ['ESTATUS' => $estatus, 'count' => $count];
            }

            return array_values($agrupadosPorConjunto);
        } else {
            throw new \Exception('Error al contar por conjunto y estado: ' . $conexion->error, $conexion->errno);
        }
    } catch (\Throwable $th) {
        throw new \Exception('Error al contar por conjunto y estado: ' . $th->getMessage(), $th->getCode());
    }
}

public function calcularPorcentajeVentaPorAnio() {
    try {
        $conexion = parent::conectar();

        $query = "SELECT
                    YEAR(STR_TO_DATE(FECHA_FIRMA, '%Y-%m-%d')) AS year,
                    SUM(CASE WHEN TOTAL IS NOT NULL AND TOTAL != 'null' THEN CAST(TOTAL AS DECIMAL) ELSE 0 END) AS totalSum,
                    (SUM(CASE WHEN TOTAL IS NOT NULL AND TOTAL != 'null' THEN CAST(TOTAL AS DECIMAL) ELSE 0 END) / 
                        (SELECT SUM(CASE WHEN TOTAL IS NOT NULL AND TOTAL != 'null' THEN CAST(TOTAL AS DECIMAL) ELSE 0 END) FROM base_madre_navetec)
                    ) * 100 AS percentage
                FROM
                    base_madre_navetec
                WHERE
                    FECHA_FIRMA IS NOT NULL
                    AND TOTAL IS NOT NULL
                GROUP BY
                    YEAR(STR_TO_DATE(FECHA_FIRMA, '%Y-%m-%d'))
                ORDER BY
                    YEAR(STR_TO_DATE(FECHA_FIRMA, '%Y-%m-%d'))";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $datos;
        } else {
            throw new \Exception('Error al calcular porcentaje de venta por año: ' . $conexion->error, $conexion->errno);
        }
    } catch (\Throwable $th) {
        throw new \Exception('Error al calcular porcentaje de venta por año: ' . $th->getMessage(), $th->getCode());
    }
}


public function calcularTotalVentaPorAnioYMes()
{
    try {
        $conexion = parent::conectar();

        $query = "SELECT
                    YEAR(fecha_firma) AS year,
                    MONTHNAME(fecha_firma) AS month,
                    SUM(CASE WHEN TOTAL IS NOT NULL AND TOTAL != 'null' THEN CAST(TOTAL AS DECIMAL) ELSE 0 END) AS totalSum
                FROM
                    base_madre_navetec
                WHERE
                    fecha_firma IS NOT NULL
                    AND TOTAL IS NOT NULL
                GROUP BY
                    YEAR(fecha_firma), MONTH(fecha_firma)
                ORDER BY
                    YEAR(fecha_firma), MONTH(fecha_firma)";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
        } else {
            throw new \Exception('Error al obtener ventas por año y mes: ' . $conexion->error, $conexion->errno);
        }
    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener ventas por año y mes: ' . $th->getMessage(), $th->getCode());
    }
}
public function obtenerConteoPorConjuntoYDisponibilidad()
{
    try {
        $conexion = parent::conectar();

        $query = "SELECT
                    CONJUNTO,
                    DISPONIBILIDAD,
                    COUNT(*) AS count
                FROM
                    base_madre_navetec
                WHERE
                    CONJUNTO IS NOT NULL
                    AND CONJUNTO <> '#XL_EVAL_ERROR#'
                    AND DISPONIBILIDAD IS NOT NULL
                    AND DISPONIBILIDAD NOT IN ('#XL_EVAL_ERROR#', 'null')
                GROUP BY
                    CONJUNTO, DISPONIBILIDAD";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
        } else {
            throw new \Exception('Error al obtener el conteo por conjunto y disponibilidad: ' . $conexion->error, $conexion->errno);
        }
    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener el conteo por conjunto y disponibilidad: ' . $th->getMessage(), $th->getCode());
    }
}

    
public function contarEstadosGarantiaPorConjunto()
{
    try {
        $conexion = parent::conectar();

        $query = "
            SELECT
                CONJUNTO,
                SUM(CASE WHEN ESTATUS_GARANTIA = 'VIGENTE' THEN count ELSE 0 END) AS totalVigente,
                SUM(CASE WHEN ESTATUS_GARANTIA = 'VENCIDO' THEN count ELSE 0 END) AS totalVencido
            FROM (
                SELECT
                    CONJUNTO,
                    ESTATUS_GARANTIA,
                    COUNT(*) AS count
                FROM base_madre_navetec
                WHERE ESTATUS_GARANTIA IN ('VIGENTE', 'VENCIDO')
                GROUP BY CONJUNTO, ESTATUS_GARANTIA
            ) AS subquery
            GROUP BY CONJUNTO;
        ";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            // Imprimir resultados en un formato que sea fácilmente legible en la consola
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
        } else {
            throw new \Exception('Error al contar estados de garantía por conjunto: ' . $conexion->error, $conexion->errno);
        }
    } catch (\Throwable $th) {
        throw new \Exception('Error al contar estados de garantía por conjunto: ' . $th->getMessage(), $th->getCode());
    }
}


public function obtenerPorcentajePorUso() {
    try {
        $conexion = parent::conectar();

        $query = "
            SELECT
                USO,
                (COUNT(*) / (SELECT COUNT(*) FROM base_madre_navetec WHERE USO NOT IN ('null', '-', '#XL_EVAL_ERROR#'))) * 100 AS porcentaje
            FROM base_madre_navetec
            WHERE USO NOT IN ('null', '-', '#XL_EVAL_ERROR#')
            GROUP BY USO;
        ";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            // Imprimir resultados en un formato que sea fácilmente legible en la consola
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
        } else {
            throw new \Exception('Error al obtener porcentaje de tipo de uso: ' . $conexion->error, $conexion->errno);
        }
    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener porcentaje de tipo de uso: ' . $th->getMessage(), $th->getCode());
    }
}

public function obtenerConteoPorConjuntoYEstadosCobranza() {
    try {
        $conexion = parent::conectar();

        $query = "
        SELECT conjunto, estatus_cobranza, COUNT(*) AS count FROM base_madre_navetec GROUP BY conjunto, estatus_cobranza;
        ";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            // Imprimir resultados en un formato que sea fácilmente legible en la consola
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
        } else {
            throw new \Exception('Error al obtener conteo por conjunto y estados de cobranza: ' . $conexion->error, $conexion->errno);
        }
    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener conteo por conjunto y estados de cobranza: ' . $th->getMessage(), $th->getCode());
    }
}

public function obtenerPorcentajeOcupacion() {
    try {
        $conexion = parent::conectar();

        $query = "
            SELECT ocupacion,
                   IFNULL(ROUND((COUNT(*) / (SELECT COUNT(*) FROM base_madre_navetec)) * 100, 2), 0) AS porcentaje
            FROM base_madre_navetec
            GROUP BY ocupacion;
        ";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
        } else {
            throw new \Exception('Error al obtener porcentaje de ocupación: ' . $conexion->error, $conexion->errno);
        }

    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener porcentaje de ocupación: ' . $th->getMessage(), $th->getCode());
    }
}

public function obtenerPorcentajePorGiro() {
    try {
        $conexion = parent::conectar();

        $query = "
            SELECT GIRO,
                   IFNULL(ROUND((COUNT(*) / (SELECT COUNT(*) FROM base_madre_navetec)) * 100, 2), 0) AS porcentaje
            FROM base_madre_navetec
            GROUP BY GIRO;
        ";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
        } else {
            throw new \Exception('Error al obtener porcentaje por giro: ' . $conexion->error, $conexion->errno);
        }

    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener porcentaje por giro: ' . $th->getMessage(), $th->getCode());
    }
}

public function obtenerTotalesDeudaPorConjunto() {
    try {
        $conexion = parent::conectar();

        $query = "
            SELECT CONJUNTO,
                   IFNULL(SUM(
                       CASE
                           WHEN deuda_total = 'null' THEN 0
                           ELSE CAST(deuda_total AS DECIMAL(10,2))
                       END
                   ), 0) AS totalDeuda
            FROM base_madre_navetec
            WHERE deuda_total NOT IN ('#XL_EVAL_ERROR#') AND CONJUNTO IS NOT NULL
            GROUP BY CONJUNTO;
        ";

        $resultado = $conexion->query($query);

        if ($resultado) {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
        } else {
            throw new \Exception('Error al obtener totales de deuda por conjunto: ' . $conexion->error, $conexion->errno);
        }

    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener totales de deuda por conjunto: ' . $th->getMessage(), $th->getCode());
    }
}

        
 }


 ?>