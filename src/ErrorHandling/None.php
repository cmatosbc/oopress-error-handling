<?php

namespace Oopress\ErrorHandling;

/**
 * Class representing the absence of a value.
 */
class None extends Option
{
    /**
     * {@inheritdoc}
     */
    public function isSome(): bool {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isNone(): bool {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception Always throws an exception when called on None.
     */
    public function unwrap()
    {
        try {
            throw new SomeNoneException("Called unwrap on a None value");
        } catch (SomeNoneException $e) { 
            error_log("Caught exception inside unwrap: " . $e->getMessage() . PHP_EOL);
        }
    }
}
