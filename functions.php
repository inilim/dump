<?php

// ------------------------------------------------------------------
// ___
// ------------------------------------------------------------------
if (!function_exists('dde')) {
    function dde(...$v): void
    {
        \var_dump(...$v);
        exit();
    }
}
// ------------------------------------------------------------------
// ___
// ------------------------------------------------------------------
if (!function_exists('dd')) {
    function dd(...$v): void
    {
        \var_dump(...$v);
        echo PHP_EOL;
    }
}
// ------------------------------------------------------------------
// ___
// ------------------------------------------------------------------

if (!function_exists('de')) {
    function de(...$v): void
    {
        \array_map(
            function ($i) {
                \print_r($i);
                echo PHP_EOL;
            },
            $v
        );
        exit();
    }
}

// ------------------------------------------------------------------
// ___
// ------------------------------------------------------------------

if (!function_exists('d')) {
    function d(...$v): void
    {
        \array_map(
            function ($i) {
                \print_r($i);
                echo PHP_EOL;
            },
            $v
        );
        echo PHP_EOL;
    }
}
