<?php

//Funcion para cargar las clases de forma autómatica de la carpeta LIBRARIES como se definió en el config.php
spl_autoload_register(function ($class) {
    if (file_exists("Libraries/" . 'Core/' . $class . ".php")) {
        require_once("Libraries/" . 'Core/' . $class . ".php");
    }
});
