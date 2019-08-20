<?php 
function insertImage($path, $additional_attributes='') {
    echo "<img src=\"" . get_template_directory_uri() . $path . "\" " . $additional_attributes .">";
}

function insertLink($path, $additional_attributes='') {
    echo "<a href=\"" . get_template_directory_uri () . $path . "\" " . $additional_attributes .">";
}