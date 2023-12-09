<?php 

require_once __DIR__ . '/dd/kint.phar';


if (!\function_exists('dd')) {
    /**
     * Alias of Kint::dump().
     *
     * @param mixed ...$args
     *
     * @return int|string
     */
    function dd(...$args)
    {
        return Kint::dump(...$args);
    }

    Kint::$aliases[] = 'dd';
}

function ddd(...$args){

    dd(...$args);
    wp_die('ddd end');
    
}