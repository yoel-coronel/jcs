<?php

namespace App\Http\Livewire\Marcas;

use App\Models\Marca;
use App\ServiciosDAO\ICrud;

use Livewire\Component;
use Livewire\WithPagination;

class Brand extends Component implements ICrud
{
    use WithPagination;

    public $search = "";
    public  $brand_name="Mi nombre";
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

   public $form = 1;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function create(){
        $this->form = 1;
    }
    public function show($id){
        $this->form = 1;
        $marca = Marca::FindOrFail($id);
        $this->brand_name = $marca->brand_name;

    }
    public function render()
    {
        return view('livewire.marcas.home',[
            'marcas' => Marca::where('brand_name', 'like', '%'.$this->search.'%')->paginate(2),
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
