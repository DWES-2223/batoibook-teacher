<?php
namespace App;

use PDO;
use PDOException;

include_once("./config/parametresBD.php");

class Connection {

    public $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO(DSN, USUARIO, PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
            die();
        }
    }

    public function sql($class, $values)
    {
        $table = $class::table();
        $sql = "SELECT * FROM $table WHERE (";
        foreach (array_keys($values) as $key => $id) {
            if ($key != 0)  {
                $sql .= ','.$id.'=:'.$id;
            } else {
                $sql .= $id.'=:'.$id;
            }
        }
        $sql .= ")";
        $sentence = $this->connection->prepare($sql);
        foreach ($values as $key => $value) {
            $sentence->bindValue(":$key", $value);
        }
        $sentence -> setFetchMode(PDO::FETCH_CLASS, $class);
        $sentence -> execute();
        return  $sentence->fetchAll();
    }

    public function insert($table, $values)
    {
        $keys = implode(", ", array_keys($values));
        $sql = "INSERT INTO $table (";
        foreach (array_keys($values) as $key => $id){
            if ($key != 0){
                $sql .= ','.$id;
            } else {
                $sql .= $id;
            }
        }
        $sql .= ") VALUES (";
        foreach (array_keys($values) as $key => $id) {
            if ($key != 0) {
                $sql .= ',:'.$id;
            } else {
                $sql .= ':'.$id;
            }
        }
        $sql .= ")";
        $sentence = $this->connection->prepare($sql);
        foreach ($values as $key => $value) {
            $sentence->bindValue(":$key", $value);
        }

        $sentence -> execute();
        $id = $this->connection -> lastInsertId();

        return $id;
    }




}
