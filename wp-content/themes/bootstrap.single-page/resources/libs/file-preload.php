<!-- ---------------------WARNING!------------------------- -->
<!-- ---------------------CUIDADO!------------------------- -->
<!-- YOU ARE STRONGLY ADVISED AGAINST MODIFIYING THIS FILE! -->
<!-- YOU ARE STRONGLY ADVISED AGAINST MODIFIYING THIS FILE! -->
<!-- YOU ARE STRONGLY ADVISED AGAINST MODIFIYING THIS FILE! -->
<!-- ---------------------CUIDADO!------------------------- -->
<!-- ---------------------WARNING!------------------------- -->





<?php 
function register_and_enqueue_local_script($val, $path, $addToFooterFlag) {
    register_and_enqueue_script($val, get_template_directory_uri() . $path . '/resources/js/', $addToFooterFlag);
}

function register_and_enqueue_local_style($val, $path) {
    register_and_enqueue_style($val, get_template_directory_uri() . '/resources/css/' . $path);
}

function register_and_enqueue_local_lib_style($val, $path) {
    register_and_enqueue_style($val, get_template_directory_uri() . '/resources/lib/' . $path);
}



function register_and_enqueue_style($val, $path) {
    wp_deregister_style($val);

    wp_register_style(
        $val, // name of style sheet; can be named whatever
        $path, //  template directory URI is the address of stylesheet on server
        array(), // optional prerequisite stylesheet loads
        false, // set version
        'all'); // declares when this stylesheet is used

    wp_enqueue_style($val);
}


function register_and_enqueue_script($val, $path, $addToFooterFlag) {
    wp_deregister_script($val);

    wp_register_script(
        $val, // name of js; can be named whatever 
        $path, // location of script
        '', // optional dependencies
        1, // version
        $addToFooterFlag); // add to footer flag

    wp_enqueue_script($val);
}