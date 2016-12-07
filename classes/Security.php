<?php

class Security
{
    public function BcryptPassword($password)
    {
        $options = [
            'cost' => 11
        ];

        return password_hash($password, PASSWORD_BCRYPT, $options)."\n";
    }

    public function DefaultPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}