<?php
const BASE_DIR=__DIR__;
const URI_SEPARATOR = '/';
function autoloadModel($id){
    $id=str_replace('\\', '/', $id);
    include 'classes'.URI_SEPARATOR.$id.'.php';
}    
spl_autoload_register('autoloadModel');    