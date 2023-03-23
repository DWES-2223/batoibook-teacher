<?php

namespace App;


class Book
{

    public static function table()
    {
        return "books";
    }

    public static function getAll($limit = null, $offset = null)
    {
        $connection = new Connection();
        return $connection->sql(self::class, null, $limit, $offset);
    }


    public function getModule()
    {
        $connection = new Connection();
        $module =  $connection->sql(Module::class, ['code' => $this->idModule])[0];
        return $module->vliteral;
    }
    public function getOwner()
    {
        $connection = new Connection();
        $user =  $connection->sql(User::class, ['id' => $this->idUser])[0];
        return $user->nick;
    }

    public static function getById($id)
    {
        $connection = new Connection();
        return  $connection->sql(self::class, ['id' => $id])[0];
    }

    public static function insert($values)
    {
        $connection = new Connection();
        return $connection->insert(self::table(), $values);
    }

    public static function delete($id)
    {
        $connection = new Connection();
        return $connection->delete(self::table(), $id);
    }

    public static function update($values, $id)
    {
        $connection = new Connection();
        return $connection->update(self::table(), $values, $id);
    }

}
