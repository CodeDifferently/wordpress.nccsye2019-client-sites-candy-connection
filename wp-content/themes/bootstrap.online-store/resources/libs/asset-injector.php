<!-- ---------------------WARNING!------------------------- -->
<!-- ---------------------CUIDADO!------------------------- -->
<!-- YOU ARE STRONGLY ADVISED AGAINST MODIFIYING THIS FILE! -->
<!-- YOU ARE STRONGLY ADVISED AGAINST MODIFIYING THIS FILE! -->
<!-- YOU ARE STRONGLY ADVISED AGAINST MODIFIYING THIS FILE! -->
<!-- ---------------------CUIDADO!------------------------- -->
<!-- ---------------------WARNING!------------------------- -->





<?php 
function insertImage($path, $additional_attributes='') {
    echo getInsertImage($path, $additional_attributes);
}

function insertLink($path, $additional_attributes='') {
    echo getInsertLink($path, $additional_attributes);
}


function getInsertLink($path, $additional_attributes='') {
    return "<a href=\"" . get_template_directory_uri () . $path . "\" " . $additional_attributes .">";
}


function getInsertImage($path, $additional_attributes='') {
    return "<img src=\"" . get_template_directory_uri() . $path . "\" " . $additional_attributes .">";
}
