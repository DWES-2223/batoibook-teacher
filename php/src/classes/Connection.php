<?php
namespace App;

use PDO;
use PDOException;

include_once($_SERVER['DOCUMENT_ROOT']."/config/parametresBD.php");

class Connection
{

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

    public function sql($class, $values=null, $limit = null, $offset = null)
    {
        $table = $class::table();
        $sql = "SELECT * FROM $table";
        if ($values) {
            $sql .= " WHERE ";
            foreach (array_keys($values) as $key => $id) {
                if ($key != 0) {
                    $sql .= " AND $id=:$id";
                } else {
                    $sql .= "$id=:$id";
                }
            }
        }
        if (isset($limit) && isset($offset)) {
            $sql .= " LIMIT $limit OFFSET $offset";
        }
        $sentence = $this->connection->prepare($sql);
        foreach ($values??[] as $key => $value) {
            $sentence->bindValue(":$key", $value);
        }
        $sentence -> setFetchMode(PDO::FETCH_CLASS, $class);
        $sentence -> execute();
        return  $sentence->fetchAll();
    }

    public function insert($table, $values)
    {
        $sql = "INSERT INTO $table (";
        foreach (array_keys($values) as $key => $id) {
            if ($key != 0) {
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
        return $this->connection -> lastInsertId();

    }

    public function update($table, $values, $id)
    {
        $sql = "UPDATE $table SET ";
        foreach (array_keys($values) as $key => $value) {
            if ($key != 0) {
                $sql .= ','.$value.'=:'.$value;
            } else {
                $sql .= $value.'=:'.$value;
            }
        }
        $sql .= " WHERE id=:id";
        $sentence = $this->connection->prepare($sql);
        foreach ($values as $key => $value) {
            $sentence->bindValue(":$key", $value);
        }
        $sentence -> execute();
        return $id;
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=:id";
        $sentence = $this->connection->prepare($sql);
        $sentence->bindValue(":id", $id);
        $lines = $sentence -> execute();
        if ($lines == 0) {
            throw new Exception("No se ha podido eliminar el registro");
        } else {
            return $lines;
        }
    }
}
