<?php 

require_once __DIR__ . '/dd/kint.phar';

use Kint\Kint;

/**
 * d() - visual
 * s() - cli
 */


if (!\function_exists('dd')) {
    function dd(...$args)
    {
        Kint::$aliases[] = 'dd';
        d(...$args);
        wp_die('===');

    }

}

if (!\function_exists('ds')) {
    function ds(...$args){
        Kint::$aliases[] = 'ds';
        s(...$args);
        exit;
    }
}
