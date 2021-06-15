<?php

class Errors extends Controllers
{
    public function __construct()
    {
        parent::__construct(); //Ejecuta el método constructor de la clase que se está heredando

    }

    public function notFound()
    {
        $this->views->getView($this, "error");
    }
}

$notFound = new Errors();
$notFound->notFound();
