<?php

// function autoCarga($classname){

//     require_once 'controller/'.$classname.".php";
// }

spl_autoload_register(function ($classname){
    require_once 'controller/'.$classname.'.php';
});