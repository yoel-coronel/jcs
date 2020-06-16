<?php

namespace App\ServiciosDAO;


interface IMarcaDAO
{
    public function showAll();
    public function showOne($id);
    public function save(array $data);
    public function update(array $data,$id);
    public function destroy($id);
}
