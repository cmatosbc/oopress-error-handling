<?php

namespace Oopress\ErrorHandling;

class None extends Option
{
    public function isSome(): bool
    {
        return false;
    }
    
    public function isNone(): bool
    {
        return true;
    }
    
    public function unwrap()
    {
        throw new SomeNoneException("Called unwrap on a None value");
    }
}
