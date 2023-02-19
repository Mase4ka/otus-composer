<?php

namespace MariaKvaskova\OtusComposer;

class PasswordGenerator
{
    public function create(int $length = 10): string
    {
        $symbols = 'abcdefghijkmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%^&*';
        $max_value = mb_strlen($symbols) - 1;
        $password = '';
        for ($i = 0; $i++ < $length;) {
            $n = rand(0, $max_value);
            $password .= $symbols[$n];
        }
        return $password;
    }
}