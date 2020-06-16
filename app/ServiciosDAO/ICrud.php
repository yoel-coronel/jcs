<?php


namespace App\ServiciosDAO;


Interface ICrud
{
    public function store();
    public function update();
    public function destroy();
}
