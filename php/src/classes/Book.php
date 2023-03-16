<?php

namespace App;


class Book
{

    public static function table()
    {
        return "books";
    }

    public static function getAll()
    {
        $connection = new Connection();
        return $connection->sql(self::class);
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
        $book =  $connection->sql(self::class, ['id' => $id])[0];
        return $book;
    }

}
