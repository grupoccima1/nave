<?php
        session_start();

        class Conexion{
            protected $dbh;

            protected function conectar(){
                try{
                    $conectar=mysqli_connect('localhost','root','','naves');
                   // $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=bbbme11_ti1", "bbbme11_ti","Gccima22.");
                    return $conectar;
                } catch (Exception $e) {
                    print "¡Error BD!: " .$e->getMessage()."<br/>";
                    die();
                }
            }

            public function set_names(){
                return $this->dbh->query("SET NAMES 'utf8'");
            }

            public function ruta(){
               // return "https://ti.grupoccima.com/index.php";
            }
        }
?>