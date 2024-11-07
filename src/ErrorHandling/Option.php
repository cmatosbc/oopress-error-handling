<?php

namespace Oopress\ErrorHandling;

abstract class Option
{
    public static function some($value): Some 
    {
        return new Some($value);
    }
    
    public static function none(): None
    {
        return new None();
    }
    
    abstract public function isSome(): bool;
    
    abstract public function isNone(): bool;
    
    abstract public function unwrap();
}
