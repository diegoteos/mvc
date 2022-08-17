<?php

/*
Mapear la url ingresada en el navegador
1- controlador
2- metodo
3- parametro
Ejemplo: /articulos/actualizar/4
*/

class Core
{
    protected $controladorActual = 'paginas';
    protected $metodoActual = 'index';
    protected $parametros = [];

    // constructor
    public function __construct()
    {
        $url = $this->getUrl();
    }

    public function getUrl()
    {
        echo $_GET['url'];
    }
}
