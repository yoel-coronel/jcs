<?php

namespace App\Http\Livewire\Marcas;

use App\Models\Marca;
use Livewire\Component;

use Livewire\WithPagination;

class Brand extends Component
{
    use WithPagination;

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
   public $totalPaginate = 10;

    public $search = '';

    protected $updatesQueryString = ['search'];

   public function mount(){
       $this->search = request()->query('search', $this->search);
   }

    public function render()
    {
        return view('livewire.marcas.home',[
            "marcas" => Marca::where('brand_name', 'like', '%'.$this->search.'%')
                              ->orWhere('brand_code','like', '%'.$this->search.'%')
                              ->paginate($this->totalPaginate),
        ]);
    }

    protected $listeners = ['Ubigeo' => 'UpdatedUbigeo'];

    public function UpdatedUbigeo($id)
    {
        $this->brand_ubigeo = $id;
    }

    public function create(){
        $this->form = 1;
    }
    public function Cancelar(){
        $this->form = 0;
    }
    public function show($id){
        $this->form = 1;
        $marca = Marca::FindOrFail($id);
        $this->brand_name = $marca->brand_name;

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
        return redirect()->to('/instituciones');
    }
    public function update(){

    }
    public function destroy($id)
    {

    }

}
