<?php

if (!\function_exists('dde')) {
    /**
     * @param mixed ...$v
     * @return void
     */
    function dde()
    {
        \dd(...\func_get_args());
        exit();
    }
}

if (!\function_exists('dd')) {
    /**
     * @param mixed ...$v
     * @return void
     */
    function dd()
    {
        if (\in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
            \var_dump(...\func_get_args());
            echo PHP_EOL;
        } else {
            echo '<pre style="display: block;white-space: pre;padding: 5px;overflow: initial !important;">';
            \var_dump(...\func_get_args());
            echo '</pre>';
        }
    }
}

if (!\function_exists('de')) {
    /**
     * @param mixed ...$v
     * @return void
     */
    function de()
    {
        \d(...\func_get_args());
        exit();
    }
}

if (!\function_exists('d')) {
    /**
     * @param mixed ...$v
     * @return void
     */
    function d()
    {
        $isCLI = \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true);

        \array_map(
            static function ($i) use ($isCLI) {
                if ($isCLI) {
                    \print_r($i);
                    echo PHP_EOL;
                } else {
                    echo '<pre style="display: block;white-space: pre;padding: 5px;overflow: initial !important;">';
                    \print_r($i);
                    echo '</pre>';
                }
            },
            \func_get_args()
        );

        if ($isCLI) {
            echo PHP_EOL;
        } else {
            echo '<br>';
        }
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
     * @return void
     */
    function deUsage()
    {
        \dUsage(...\func_get_args());
        exit;
    }
}
