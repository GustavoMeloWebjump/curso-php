<?php

namespace Alura\IFace;

interface Authenticable 
{
    public static function Login (string $password): bool; 
}
