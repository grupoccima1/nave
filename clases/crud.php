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

    public function mostrarDatosnaves(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->naves;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mostrarDatosgeneral(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->general;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mostrarDatosco1(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranza1;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mostrarDatosco(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranza;
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
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function consultarDatosNaves() {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->naves;
    
            // Tu consulta MongoDB aquí
            $pipeline = [
                [
                    '$match' => [
                        '$and' => [
                            ['FECHA_FIRMA' => ['$ne' => null, '$ne' => '#XL_EVAL_ERROR#']],
                            ['TOTAL' => ['$ne' => null, '$ne' => '#XL_EVAL_ERROR#']],
                            ['COBRADO' => ['$ne' => null, '$ne' => '#XL_EVAL_ERROR#']],
                            ['DEUDA_CAPITAL' => ['$ne' => null, '$ne' => '#XL_EVAL_ERROR#']],
                        ],
                    ],
                ],
                [
                    '$addFields' => [
                        'fechaFirma' => [
                            '$cond' => [
                                'if' => ['$eq' => [['$type' => '$FECHA_FIRMA'], 'date']],
                                'then' => '$FECHA_FIRMA',
                                'else' => [
                                    '$dateFromString' => [
                                        'dateString' => '$FECHA_FIRMA',
                                        'format' => '%Y-%m-%d',
                                        'onError' => null,
                                    ],
                                ],
                            ],
                        ],
                        'totalValue' => [
                            '$cond' => [
                                'if' => ['$eq' => ['$TOTAL', 'null']],
                                'then' => 0,
                                'else' => ['$toDouble' => '$TOTAL'],
                            ],
                        ],
                        'cobradoValue' => [
                            '$cond' => [
                                'if' => ['$eq' => ['$COBRADO', 'null']],
                                'then' => 0,
                                'else' => ['$toDouble' => '$COBRADO'],
                            ],
                        ],
                        'deudaCapitalValue' => [
                            '$cond' => [
                                'if' => ['$eq' => ['$DEUDA_CAPITAL', 'null']],
                                'then' => 0,
                                'else' => ['$toDouble' => '$DEUDA_CAPITAL'],
                            ],
                        ],
                    ],
                ],
                [
                    '$match' => [
                        'fechaFirma' => ['$ne' => null],
                    ],
                ],
                [
                    '$group' => [
                        '_id' => ['$year' => '$fechaFirma'],
                        'totalSum' => ['$sum' => '$totalValue'],
                        'cobradoSum' => ['$sum' => '$cobradoValue'],
                        'deudaCapitalSum' => ['$sum' => '$deudaCapitalValue'],
                    ],
                ],
                [
                    '$sort' => ['_id' => 1], // Orden ascendente por año
                ],
            ];
    
            $datos = $coleccion->aggregate($pipeline)->toArray();
            return $datos;
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

    public function consultarEntregasPorConjunto() {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->naves; // Reemplaza 'tu_coleccion' con el nombre real de tu colección
    
            $pipeline = [
                [
                    '$match' => [
                        '$or' => [
                            ['ESTATUS_ENTREGA' => 'ENTREGADO'],
                            ['ESTATUS_ENTREGA' => 'PENDIENTE']
                        ]
                    ]
                ],
                [
                    '$group' => [
                        '_id' => [
                            'CONJUNTO' => '$CONJUNTO',
                            'ESTATUS_ENTREGA' => '$ESTATUS_ENTREGA'
                        ],
                        'total' => ['$sum' => 1]
                    ]
                ],
                [
                    '$group' => [
                        '_id' => '$_id.CONJUNTO',
                        'entregado' => [
                            '$sum' => [
                                '$cond' => [
                                    ['$eq' => ['$_id.ESTATUS_ENTREGA', 'ENTREGADO']],
                                    '$total',
                                    0
                                ]
                            ]
                        ],
                        'pendiente' => [
                            '$sum' => [
                                '$cond' => [
                                    ['$eq' => ['$_id.ESTATUS_ENTREGA', 'PENDIENTE']],
                                    '$total',
                                    0
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    '$project' => [
                        '_id' => 1,
                        'entregado' => 1,
                        'pendiente' => 1
                    ]
                ]
            ];
    
            $datos = $coleccion->aggregate($pipeline)->toArray();
            return $datos;
        } catch (\Throwable $th) {
            throw new \Exception('Error al consultar entregas por conjunto: ' . $th->getMessage(), $th->getCode());
        }
    }
    
  
    
    public function consultarPorcentajeEstados() {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranza;
    
            $pipeline = [
                [
                    '$match' => [
                        'ESTATUS' => ['$in' => ['AL CORRIENTE', 'MOROSO']],
                    ],
                ],
                [
                    '$group' => [
                        '_id' => '$ESTATUS',
                        'count' => ['$sum' => 1],
                    ],
                ],
                [
                    '$group' => [
                        '_id' => null,
                        'total' => ['$sum' => '$count'],
                        'estados' => [
                            '$push' => [
                                'ESTATUS' => '$_id',
                                'count' => '$count',
                            ],
                        ],
                    ],
                ],
                [
                    '$project' => [
                        '_id' => 0,
                        'total' => 1,
                        'porcentajes' => [
                            '$map' => [
                                'input' => '$estados',
                                'as' => 'estado',
                                'in' => [
                                    'ESTATUS' => '$$estado.ESTATUS',
                                    'porcentaje' => [
                                        '$cond' => [
                                            [
                                                '$eq' => ['$$estado.count', 0],
                                            ],
                                            null,
                                            [
                                                '$divide' => [
                                                    [
                                                        '$multiply' => ['$$estado.count', 100],
                                                    ],
                                                    '$total',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ];
    
            $datos = $coleccion->aggregate($pipeline)->toArray();
            return $datos;
    
        } catch (\Throwable $th) {
            throw new \Exception('Error al obtener porcentaje de estados: ' . $th->getMessage(), $th->getCode());
        }
    }
    public function obtenerDatosPorConjuntoYEstado() {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranza;
    
            $pipeline = [
                [
                    '$match' => [
                        'ESTATUS' => ['$in' => ['AL CORRIENTE', 'MOROSO']],
                    ],
                ],
                [
                    '$group' => [
                        '_id' => [
                            'CONJUNTO' => '$CONJUNTO',
                            'ESTATUS' => '$ESTATUS',
                        ],
                        'count' => ['$sum' => 1],
                    ],
                ],
                [
                    '$group' => [
                        '_id' => '$_id.CONJUNTO',
                        'estados' => [
                            '$push' => [
                                'ESTATUS' => '$_id.ESTATUS',
                                'count' => '$count',
                            ],
                        ],
                    ],
                ],
            ];
    
            $resultados = $coleccion->aggregate($pipeline)->toArray();
            return $resultados;
    
        } catch (\Throwable $th) {
            throw new \Exception('Error al contar por conjunto y estado: ' . $th->getMessage(), $th->getCode());
        }
    }
    public function calcularPorcentajeVentaPorAnio() {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->naves;
    
            $pipeline = [
                [
                    '$match' => [
                        '$and' => [
                            ['FECHA_FIRMA' => ['$ne' => null, '$ne' => '#XL_EVAL_ERROR#']],
                            ['TOTAL' => ['$ne' => null, '$ne' => '#XL_EVAL_ERROR#']],
                        ],
                    ],
                ],
                [
                    '$addFields' => [
                        'fechaFirma' => [
                            '$cond' => [
                                'if' => ['$eq' => [['$type' => '$FECHA_FIRMA'], 'date']],
                                'then' => '$FECHA_FIRMA',
                                'else' => [
                                    '$dateFromString' => [
                                        'dateString' => '$FECHA_FIRMA',
                                        'format' => '%Y-%m-%d',
                                        'onError' => null,
                                    ],
                                ],
                            ],
                        ],
                        'totalValue' => [
                            '$cond' => [
                                'if' => ['$eq' => ['$TOTAL', 'null']],
                                'then' => 0,
                                'else' => ['$toDouble' => '$TOTAL'],
                            ],
                        ],
                    ],
                ],
                [
                    '$match' => [
                        'fechaFirma' => ['$ne' => null],
                    ],
                ],
                [
                    '$group' => [
                        '_id' => ['year' => ['$year' => '$fechaFirma']],
                        'totalSum' => ['$sum' => '$totalValue'],
                    ],
                ],
                [
                    '$group' => [
                        '_id' => null,
                        'salesByYear' => [
                            '$push' => [
                                'year' => '$_id.year',
                                'totalSum' => '$totalSum',
                            ],
                        ],
                        'totalGlobal' => ['$sum' => '$totalSum'],
                    ],
                ],
                [
                    '$project' => [
                        '_id' => 0,
                        'salesByYear' => 1,
                        'totalGlobal' => 1,
                    ],
                ],
                [
                    '$unwind' => '$salesByYear',
                ],
                [
                    '$addFields' => [
                        'percentage' => [
                            '$multiply' => [
                                ['$divide' => ['$salesByYear.totalSum', '$totalGlobal']],
                                100,
                            ],
                        ],
                    ],
                ],
                [
                    '$group' => [
                        '_id' => '$salesByYear.year',
                        'percentage' => ['$sum' => '$percentage'],
                    ],
                ],
                [
                    '$sort' => ['_id' => 1],
                ],
            ];
    
            $datos = $coleccion->aggregate($pipeline)->toArray();
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
    
        } catch (\Throwable $th) {
            throw new \Exception('Error al calcular porcentaje de venta por año: ' . $th->getMessage(), $th->getCode());
        }
    }
    public function calcularTotalVentaPorAnioYMes()
    {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->naves;
    
            $pipeline = [
                [
                    '$match' => [
                        '$and' => [
                            ['FECHA_FIRMA' => ['$ne' => null, '$ne' => '#XL_EVAL_ERROR#']],
                            ['TOTAL' => ['$ne' => null, '$ne' => '#XL_EVAL_ERROR#']],
                        ],
                    ],
                ],
                [
                    '$addFields' => [
                        'fechaFirma' => [
                            '$cond' => [
                                'if' => ['$eq' => [['$type' => '$FECHA_FIRMA'], 'date']],
                                'then' => '$FECHA_FIRMA',
                                'else' => [
                                    '$dateFromString' => [
                                        'dateString' => '$FECHA_FIRMA',
                                        'format' => '%Y-%m-%d',
                                        'onError' => null,
                                    ],
                                ],
                            ],
                        ],
                        'totalValue' => [
                            '$cond' => [
                                'if' => ['$eq' => ['$TOTAL', 'null']],
                                'then' => 0,
                                'else' => ['$toDouble' => '$TOTAL'],
                            ],
                        ],
                    ],
                ],
                [
                    '$match' => [
                        'fechaFirma' => ['$ne' => null],
                    ],
                ],
                [
                    '$group' => [
                        '_id' => [
                            'year' => ['$year' => '$fechaFirma'],
                            'month' => ['$month' => '$fechaFirma'],
                        ],
                        'totalSum' => ['$sum' => '$totalValue'],
                    ],
                ],
                [
                    '$addFields' => [
                        'monthName' => [
                            '$arrayElemAt' => [
                                [
                                    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                                    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                                ],
                                ['$subtract' => ['$_id.month', 1]],
                            ],
                        ],
                    ],
                ],
                [
                    '$sort' => ['_id.year' => 1, '_id.month' => 1],
                ],
                [
                    '$project' => [
                        '_id' => 0,
                        'year' => '$_id.year',
                        'month' => '$monthName',
                        'totalSum' => 1,
                    ],
                ],
            ];
    
            $datos = $coleccion->aggregate($pipeline)->toArray();
    
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
    
        } catch (\Throwable $th) {
            throw new \Exception('Error al obtener ventas por año y mes: ' . $th->getMessage(), $th->getCode());
        }
    }
    
    public function obtenerConteoPorConjuntoYDisponibilidad()
    {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->naves;
    
            $pipeline = [
                [
                    '$match' => [
                        '$and' => [
                            ['CONJUNTO' => ['$nin' => [null, '#XL_EVAL_ERROR#']]],
                            ['DISPONIBILIDAD' => ['$nin' => [null, '#XL_EVAL_ERROR#', 'null']]],
                        ],
                    ],
                ],
                [
                    '$group' => [
                        '_id' => [
                            'conjunto' => '$CONJUNTO',
                            'disponibilidad' => '$DISPONIBILIDAD',
                        ],
                        'count' => ['$sum' => 1],
                    ],
                ],
                [
                    '$project' => [
                        '_id' => 0,
                        'conjunto' => '$_id.conjunto',
                        'disponibilidad' => '$_id.disponibilidad',
                        'count' => 1,
                    ],
                ],
            ];
    
            $datos = $coleccion->aggregate($pipeline)->toArray();
    
            echo "<script>console.table(" . json_encode($datos) . ")</script>";
            return $datos;
    
        } catch (\Throwable $th) {
            throw new \Exception('Error al obtener el conteo por conjunto y disponibilidad: ' . $th->getMessage(), $th->getCode());
        }
    }
    
    public function contarEstadosGarantiaPorConjunto()
{
    try {
        $conexion = parent::conectar();
        $coleccion = $conexion->naves; // Reemplaza "tuColeccion" con el nombre real de tu colección

        $pipeline = [
            [
                '$match' => [
                    'ESTATUS_GARANTIA' => ['$in' => ['VIGENTE', 'VENCIDO']]
                ]
            ],
            [
                '$group' => [
                    '_id' => [
                        'conjunto' => '$CONJUNTO',
                        'estatusGarantia' => '$ESTATUS_GARANTIA'
                    ],
                    'count' => ['$sum' => 1]
                ]
            ],
            [
                '$project' => [
                    'conjunto' => '$_id.conjunto',
                    'vigente' => [
                        '$cond' => [
                            'if' => ['$eq' => ['$_id.estatusGarantia', 'VIGENTE']],
                            'then' => '$count',
                            'else' => 0
                        ]
                    ],
                    'vencido' => [
                        '$cond' => [
                            'if' => ['$eq' => ['$_id.estatusGarantia', 'VENCIDO']],
                            'then' => '$count',
                            'else' => 0
                        ]
                    ],
                    '_id' => 0
                ]
            ],
            [
                '$group' => [
                    '_id' => '$conjunto',
                    'totalVigente' => ['$sum' => '$vigente'],
                    'totalVencido' => ['$sum' => '$vencido']
                ]
            ],
            [
                '$project' => [
                    'conjunto' => '$_id',
                    'totalVigente' => 1,
                    'totalVencido' => 1,
                    '_id' => 0
                ]
            ]
        ];

        $datos = $coleccion->aggregate($pipeline)->toArray();

        echo "<script>console.table(" . json_encode($datos) . ")</script>";
        return $datos;
    } catch (\Throwable $th) {
        throw new \Exception('Error al contar estados de garantía por conjunto: ' . $th->getMessage(), $th->getCode());
    }
}

public function obtenerPorcentajePorUso() {
    try {
        $conexion = parent::conectar();
        $coleccion = $conexion->naves;

        $pipeline = [
            [
                '$match' => [
                    'USO' => ['$nin' => ['null', '-', '#XL_EVAL_ERROR#']],
                ],
            ],
            [
                '$group' => [
                    '_id' => '$USO',
                    'count' => ['$sum' => 1],
                ],
            ],
            [
                '$group' => [
                    '_id' => null,
                    'total' => ['$sum' => '$count'],
                    'usos' => [
                        '$push' => [
                            'USO' => '$_id',
                            'count' => '$count',
                        ],
                    ],
                ],
            ],
            [
                '$unwind' => '$usos',
            ],
            [
                '$project' => [
                    '_id' => 0,
                    'USO' => '$usos.USO',
                    'porcentaje' => [
                        '$multiply' => [
                            ['$divide' => ['$usos.count', '$total']],
                            100,
                        ],
                    ],
                ],
            ],
        ];

        $datos = $coleccion->aggregate($pipeline)->toArray();
        echo "<script>console.table(" . json_encode($datos) . ")</script>";
        return $datos;

    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener porcentaje de tipo de uso: ' . $th->getMessage(), $th->getCode());
    }
}

public function obtenerConteoPorConjuntoYEstadosCobranza() {
    try {
        $conexion = parent::conectar();
        $coleccion = $conexion->naves;

        $pipeline = [
            [
                '$group' => [
                    '_id' => [
                        'conjunto' => '$CONJUNTO',
                        'estatusCobranza' => '$ESTATUS_COBRANZA_SERVICIOS'
                    ],
                    'count' => ['$sum' => 1]
                ]
            ],
            [
                '$group' => [
                    '_id' => '$_id.conjunto',
                    'estatusCobranza' => [
                        '$push' => [
                            'estatus' => '$_id.estatusCobranza',
                            'count' => '$count'
                        ]
                    ]
                ]
            ],
            [
                '$project' => [
                    '_id' => 0,
                    'conjunto' => '$_id',
                    'estatusCobranza' => 1
                ]
            ]
        ];

        $datos = $coleccion->aggregate($pipeline)->toArray();

        echo "<script>console.table(" . json_encode($datos) . ")</script>";
        return $datos;
    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener conteo por conjunto y estados de cobranza: ' . $th->getMessage(), $th->getCode());
    }
}
public function obtenerPorcentajeOcupacion() {
    try {
        $conexion = parent::conectar();
        $coleccion = $conexion->naves;

        $pipeline = [
            [
                '$group' => [
                    '_id' => '$OCUPACION',
                    'count' => ['$sum' => 1],
                ],
            ],
            [
                '$group' => [
                    '_id' => null,
                    'ocupaciones' => ['$push' => ['ocupacion' => '$_id', 'count' => '$count']],
                    'total' => ['$sum' => '$count'],
                ],
            ],
            [
                '$unwind' => '$ocupaciones',
            ],
            [
                '$project' => [
                    '_id' => 0,
                    'ocupacion' => '$ocupaciones.ocupacion',
                    'porcentaje' => [
                        '$multiply' => [
                            ['$divide' => ['$ocupaciones.count', '$total']],
                            100,
                        ],
                    ],
                ],
            ],
        ];

        $datos = $coleccion->aggregate($pipeline)->toArray();

        echo "<script>console.table(" . json_encode($datos) . ")</script>";
        return $datos;

    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener porcentaje de ocupación: ' . $th->getMessage(), $th->getCode());
    }
}
public function obtenerPorcentajePorGiro() {
    try {
        $conexion = parent::conectar();
        $coleccion = $conexion->naves;

        $pipeline = [
            [
                '$group' => [
                    '_id' => '$GIRO',
                    'count' => ['$sum' => 1],
                ],
            ],
            [
                '$group' => [
                    '_id' => null,
                    'giros' => [
                        '$push' => [
                            'giro' => '$_id',
                            'count' => '$count',
                        ],
                    ],
                    'total' => ['$sum' => '$count'],
                ],
            ],
            [
                '$unwind' => '$giros',
            ],
            [
                '$project' => [
                    '_id' => 0,
                    'giro' => '$giros.giro',
                    'porcentaje' => [
                        '$multiply' => [
                            [
                                '$divide' => ['$giros.count', '$total'],
                            ],
                            100,
                        ],
                    ],
                ],
            ],
        ];

        $datos = $coleccion->aggregate($pipeline)->toArray();
        return $datos;

    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener porcentaje por giro: ' . $th->getMessage(), $th->getCode());
    }
}
public function obtenerTotalesDeudaPorConjunto() {
    try {
        $conexion = parent::conectar();
        $coleccion = $conexion->naves;

        $pipeline = [
            [
                '$match' => [
                    'TOTAL_DEUDA' => ['$nin' => ['#XL_EVAL_ERROR#']],
                    'CONJUNTO' => ['$ne' => null],
                ],
            ],
            [
                '$group' => [
                    '_id' => '$CONJUNTO',
                    'totalDeuda' => [
                        '$sum' => [
                            '$cond' => [
                                'if' => ['$eq' => ['$TOTAL_DEUDA', 'null']],
                                'then' => 0,
                                'else' => ['$toDouble' => '$TOTAL_DEUDA'],
                            ],
                        ],
                    ],
                ],
            ],
            [
                '$project' => [
                    '_id' => 0,
                    'conjunto' => '$_id',
                    'totalDeuda' => 1,
                ],
            ],
        ];

        $datos = $coleccion->aggregate($pipeline)->toArray();
        return $datos;

    } catch (\Throwable $th) {
        throw new \Exception('Error al obtener totales de deuda por conjunto: ' . $th->getMessage(), $th->getCode());
    }
}

        
}


?>