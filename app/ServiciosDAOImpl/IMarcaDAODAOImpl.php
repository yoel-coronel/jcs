<?php


namespace App\ServiciosDAOImpl;

use App\Http\Controllers\Controller;
use App\ServiciosDAO\IMarcaDAO;

class IMarcaDAODAOImpl extends Controller implements IMarcaDAO
{

    public function showAll()
    {
        return response()->json([
            "data"=>[
                "nombre"=>"Emilyn",
                "Apellido" =>"Sucari"
            ],
            "meta"=>[
                "count"=>1
            ]
        ]);
    }

    public function showOne($id)
    {
        // TODO: Implement showOne() method.
    }

    public function save(array $data)
    {
        // TODO: Implement save() method.
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}m": "178168e87efad6171b372add1dea3
