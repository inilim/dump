<?php

if (!\function_exists('dde')) {
    function dde(...$v): void
    {
        \dd(...$v);
        exit();
    }
}

if (!\function_exists('dd')) {
    function dd(...$v): void
    {
        \var_dump(...$v);
        echo PHP_EOL;
    }
}

if (!\function_exists('de')) {
    function de(...$v): void
    {
        \d(...$v);
        exit();
    }
}

if (!\function_exists('d')) {
    function d(...$v): void
    {
        \array_map(
            static function ($i) {
                \print_r($i);
                echo PHP_EOL;
            },
            $v
        );
        echo PHP_EOL;
    }
}

if (!\function_exists('dUsage')) {
    function dUsage(...$v)
    {
        \d([
            'current' => \memory_get_usage(),
            'peak'    => \memory_get_peak_usage(),
            ...$v,
        ]);
    }
}

if (!\function_exists('deUsage')) {
    function deUsage(...$v)
    {
        \dUsage(...$v);
        exit;
    }
}
