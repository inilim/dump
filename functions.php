<?php

if (!\function_exists('dde')) {
    function dde(): void
    {
        \dd(...\func_get_args());
        exit();
    }
}

if (!\function_exists('dd')) {
    /**
     * @param mixed ...$v
     */
    function dd(): void
    {
        \var_dump(...\func_get_args());
        echo PHP_EOL;
    }
}

if (!\function_exists('de')) {
    /**
     * @param mixed ...$v
     */
    function de(): void
    {
        \d(...\func_get_args());
        exit();
    }
}

if (!\function_exists('d')) {
    /**
     * @param mixed ...$v
     */
    function d(): void
    {
        \array_map(
            static function ($i) {
                \print_r($i);
                echo PHP_EOL;
            },
            \func_get_args()
        );
        echo PHP_EOL;
    }
}

if (!\function_exists('dUsage')) {
    /**
     * @param mixed ...$v
     */
    function dUsage()
    {
        \d(array_merge(
            \func_get_args(),
            [
                'current' => \memory_get_usage(),
                'peak'    => \memory_get_peak_usage(),
            ]
        ));
    }
}

if (!\function_exists('deUsage')) {
    /**
     * @param mixed ...$v
     */
    function deUsage()
    {
        \dUsage(...\func_get_args());
        exit;
    }
}
