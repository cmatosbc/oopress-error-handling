<?php

function withCheckedExceptionHandling(\Closure|array|string $func, ...$args) {
    try {
        if ($func instanceof \Closure) {
            return $func(...$args);
        }

        if (is_array($func) || is_string($func)) {
            return call_user_func($func, ...$args);
        }
    } catch (\Oopress\ErrorHandling\CheckedException $e) {
        echo "Handled CheckedException: " . $e->getMessage() . PHP_EOL;
        return null;
    }
}

function Some($value): \Oopress\ErrorHandling\Some {
    return \Oopress\ErrorHandling\Option::some($value);
}

function None(): \Oopress\ErrorHandling\None {
    return \Oopress\ErrorHandling\Option::none();
}

