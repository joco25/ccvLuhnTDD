<?php

/**
 * Die and dump.
 *
 * @param  any variable or container
 */
function dd($data){
    echo '<pre>';
    
    die(var_dump($data));
    
    echo '</pre>';
}