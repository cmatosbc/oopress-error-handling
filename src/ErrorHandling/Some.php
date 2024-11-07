<?php

namespace Oopress\ErrorHandling;

/**
 * Class representing a present value.
 */
class Some extends Option
{
    /**
     * @var mixed The wrapped value.
     */
    private $value;

    /**
     * Constructor for Some.
     *
     * @param mixed $value The value to be wrapped.
     */
    public function __construct($value) {
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
