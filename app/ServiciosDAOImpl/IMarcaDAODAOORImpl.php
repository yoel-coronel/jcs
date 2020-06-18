<?php


namespace App\ServiciosDAOImpl;

use App\Http\Controllers\Controller;
use App\ServiciosDAO\IMarcaDAO;

class IMarcaDAODAOORImpl extends Controller implements IMarcaDAO
{

    public function showAll()
    {
        return response()->json([
            "data"=>[
                "nombre"=>"Emilyn",
                "Apellido" =>"Sucari"
            ],
            "meta"=>[
                "count"=>1,"oracle"=>"11g"
            ]
        ]);
    }

    public function showOne($id)
    {
        // TODO: Implement showOne() method.
    }

    public function save(array $data)
    {
        \Log::info('guardado');
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
