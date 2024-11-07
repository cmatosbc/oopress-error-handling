<?php

namespace Oopress\ErrorHandling;

class Some extends Option
{
    private $value;
    
    public function __construct($value)
    {
        $this->value = $value;
    }
    
    public function isSome(): bool
    {
        return true;
    }
    
    public function isNone(): bool
    {
        return false;
    }
    
    public function unwrap()
    {
        return $this->value;
    }
}
