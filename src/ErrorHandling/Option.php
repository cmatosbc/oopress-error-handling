<?php

namespace Oopress\ErrorHandling;

/**
 * Abstract base class representing an optional value.
 * Subclasses include Some (for present values) and None (for absent values).
 */
abstract class Option
{
    /**
     * Creates an instance representing a present value.
     *
     * @param mixed $value The value to be wrapped in a Some instance.
     * @return Some The Some instance wrapping the provided value.
     */
    public static function some($value): Some {
        return new Some($value);
    }

    /**
     * Creates an instance representing the absence of a value.
     *
     * @return None The None instance.
     */
    public static function none(): None {
        return new None();
    }

    /**
     * Checks if the instance represents a present value.
     *
     * @return bool True if the instance is Some, false if None.
     */
    abstract public function isSome(): bool;

    /**
     * Checks if the instance represents an absent value.
     *
     * @return bool True if the instance is None, false if Some.
     */
    abstract public function isNone(): bool;

    /**
     * Unwraps the contained value if present, or throws an exception if absent.
     *
     * @return mixed The wrapped value.
     * @throws Exception If called on a None instance.
     */
    abstract public function unwrap();
}
