<?php

include 'resources/libs/file-preload.php';
include 'resources/libs/asset-injector.php';
add_action('wp_enqueue_scripts', 'load_js');
add_action('wp_enqueue_scripts', 'load_stylesheets');



// declare JavaScript dependencies; raise `true` flag for header scripts
function load_js() {
    register_and_enqueue_script('jquery3', 'https://code.jquery.com/jquery-3.4.1.js', true);
    register_and_enqueue_script('jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js', true);
    register_and_enqueue_script('jquery-easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js', true);
    register_and_enqueue_script('bootstrap-4.3.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.js', false); // bootstrap 4.3.1
    // register_and_enqueue_script('bootstrap-3.4.0', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.js', false); // bootstrap 3.4.0
    register_and_enqueue_local_script('my-sample-script', '/script.js', false);
}


// declare stylesheets
function load_stylesheets() {
    register_and_enqueue_style('bootstrap-4.3.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css'); // bootstrap 4.3.1
    // register_and_enqueue_style('bootstrap-3.4.0', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.css'); // bootstrap 3.4.0
    register_and_enqueue_style('font-nunito', 'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');
    
    register_and_enqueue_local_style('front-page', 'front-page.css');
    register_and_enqueue_local_style('shop-page', 'shop-page.css');
    register_and_enqueue_local_style('purchase-page', 'purchase-page.css');
    register_and_enqueue_local_style('about-page', 'about-page.css');
}


?>