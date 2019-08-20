
<?php
include 'resources/php/file-preload.php';
add_action('wp_enqueue_scripts', 'load_js');
add_action('wp_enqueue_scripts', 'load_stylesheets');



// declare JavaScript dependencies; raise `true` flag for header scripts
function load_js() {
    register_and_enqueue_script('jquery3', 'https://code.jquery.com/jquery-3.4.1.js', true);
    register_and_enqueue_script('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.js', false);
    register_and_enqueue_local_script('my-sample-script', 'script.js', false);
}


// declare stylesheets
function load_stylesheets() {
    register_and_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css');
    register_and_enqueue_local_style('my-sample-style', 'style.css');
}

?>