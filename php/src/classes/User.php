<?php

namespace App;

class User
{

    public static function table()
    {
        return "users";
    }

    public static function login($email, $password) {
        $connection = new Connection();
        $result = $connection->sql(self::class, [
            'email' => $email,
        ])[0];
        if ($result && password_verify($password, $result->password)) {
            return $result;
        } else {
            return false;
        }
    }
}
