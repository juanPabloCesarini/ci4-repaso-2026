<?php

namespace App\Controllers;

class Productos extends BaseController{
    
public function index():string{
    print_r($this->session);
    return "ProdctoController";
    
}

public function show():string{
    return "<h1>Detalle del producto";
}
}