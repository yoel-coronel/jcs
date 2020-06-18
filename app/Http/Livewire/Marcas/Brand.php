<?php

namespace App\Http\Livewire\Marcas;

use App\Models\Marca;
use Livewire\Component;

use Livewire\WithPagination;

class Brand extends Component
{
    use WithPagination;

    protected  $marca="";
    public  $marca_id=0;

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
    public $page = 1;

    protected $updatesQueryString = ['search','page'];




   public function updated(){
       if($this->search!=''){
            $this->page=1;
       }
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
        $this->marca_id=$id;

    }
    public function store(){

        $this->validate([
            'brand_name'=>'required|min:5|max:191|unique:marcas',
            'brand_code'=>'required|min:11|numeric',
            'brand_ubigeo'=>'required|numeric',
        ]);

        if ($this->marca_id==0) {
           Marca::create([
                'brand_name' =>$this->brand_name,
                'brand_code' =>$this->brand_code,
                'brand_ubigeo' =>$this->brand_ubigeo
           ]);
           session()->flash('status', 'Datos guardados.');
        }else{
            $marca = Marca::FindOrFail($this->marca_id);
            $marca->brand_name =$this->brand_name;
            $marca->brand_code =$this->brand_code;
            $marca->brand_ubigeo =$this->brand_ubigeo;
            $marca->save();
           session()->flash('status', 'Datos Actualizados.');
        }


        $this->form = 0;

        $this->reset();

    }
    public function update(){

    }
    public function destroy($id)
    {

    }

}
