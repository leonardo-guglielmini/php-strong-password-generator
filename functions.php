<?php
function generatePassword($length = 0)
{
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $randomChar = chr(mt_rand(33, 126));
        $password .= $randomChar;
    }
    return $password;
}
