<?php

namespace App\Http\Livewire\Marcas;

use App\Models\Marca;
use App\ServiciosDAO\ICrud;

use Livewire\Component;

class Index extends Component implements ICrud
{
       public  $brand_name;
       public  $brand_code;
       public  $brand_address;
       public  $brand_image;
       public  $brand_code_postal;
       public  $brand_telefono;
       public  $brand_email;
       public  $brand_web;
       public  $brand_code_distrito;
       public  $brand_code_provincia;
       public  $brand_code_departamento;
       public  $brand_ubigeo;

       public $form = 0;
    public function create(){
        $this->form = 1;
    }
    public function show(){
        $this->form = 2;
    }
    public function render()
    {
        return view('livewire.marcas.index',[
            'marcas' => Marca::paginate()
            ]);
    }
    public function store(){

        $this->validate([
            'brand_name'=>'required|min:5|max:191|unique:marcas',
            //'brand_code'=>'required|min:11|numeric',
        ]);

        Marca::create([
            'brand_name' =>$this->brand_name
        ]);

        $this->form = 0;
        session()->flash('status', 'Datos guardados.');
    }
    public function update(){

    }
    public function destroy()
    {
    }

}
