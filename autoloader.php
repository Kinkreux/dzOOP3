<?php

function autoLoader($classWithNamespace)
{
    $filepath = $_SERVER['DOCUMENT_ROOT'].str_replace('\\', DIRECTORY_SEPARATOR, $classWithNamespace).'.php';
    if(file_exists($filepath)) {
        include $filepath;
    }
}