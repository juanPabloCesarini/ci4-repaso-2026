<?php

namespace App\Controllers;

class Productos extends BaseController{
    
public function index():string{
    print_r($this->session);
    return "ProdctoController";
    
}

public function show($id):string{
    return "<h1>Detalle del producto: $id</h1>";
}

public function cat($categoria, $id):string{
    return "<h1>Producto en la categoría: $categoria, ID: $id</h1>";
}
}