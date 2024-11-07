<?php

/**
 * Executes a callable with enhanced exception handling.
 * Handles CheckedException specifically, providing detailed error messages.
 *
 * @param \Closure|array|string $func The function or callable to be executed.
 * @param mixed ...$args Arguments to be passed to the callable.
 * @return mixed The result of the callable execution, or null if a CheckedException was handled.
 * @throws CheckedException if a CheckedException is thrown during the callable execution.
 */
function withCheckedExceptionHandling(\Closure|array|string $func, ...$args) {
    try {
        if ($func instanceof \Closure) {
            return $func(...$args);
        }

        if (is_array($func) || is_string($func)) {
            return call_user_func($func, ...$args);
        }
    } catch (CheckedException $e) {
        echo "Handled CheckedException: " . $e->getMessage() . PHP_EOL;
        return null;
    }
}

/**
 * Creates an instance of Some, representing a present value.
 *
 * @param mixed $value The value to be wrapped in a Some instance.
 * @return Some The Some instance wrapping the provided value.
 */
function Some($value): \Oopress\ErrorHandling\Some {
    return \Oopress\ErrorHandling\Option::some($value);
}
/**
 * Creates an instance of None, representing the absence of a value.
 *
 * @return None The None instance.
 */
function None(): \Oopress\ErrorHandling\None {
    return \Oopress\ErrorHandling\Option::none();
}
