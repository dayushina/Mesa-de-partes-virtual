<?php
session_start();

class Conectar{
    protected $dbh;
    protected function conexion(){ 
        try{ 
            $conectar= $this->dbh =new PDO("mysql: local=localhost;dbname=mesadeparte","soporte","da762331");
            return $conectar;
        }catch(Exception $e){
            print"Error BD:" . $e->getMenssage(). "<br";
            die();
        }
     }
     public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
     }
     public static function ruta(){ 
     return "http://localhost/Mesa-de-partes-virtual/";
      }
}