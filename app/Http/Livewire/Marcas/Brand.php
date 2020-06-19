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
    public  $brand_ubigeo;
    public  $brand_estado;

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
        $this->validacion();
    }

    public function create(){
        $this->form = 1;
    }
    public function Cancelar(){
        $this->reset();
        $this->form = 0;
    }
    public function show($id){
        $this->form = 1;
        $marca = Marca::FindOrFail($id);
        $this->brand_name   = $marca->brand_name;
        $this->brand_code   = $marca->brand_code;
        $this->brand_email   = $marca->brand_email;
        $this->brand_address= $marca->brand_address;
        $this->brand_image  = $marca->brand_image;
        $this->brand_code_postal= $marca->brand_code_postal;
        $this->brand_telefono   = $marca->brand_telefono;
        $this->brand_web        = $marca->brand_web;
        $this->brand_ubigeo     = $marca->brand_ubigeo;
        $this->brand_estado = $marca->brand_estado;
        $this->marca_id=$id;
        $this->emit('AuloadUbigeo', $marca->brand_ubigeo);
    }
    public function store(){

        $this->validacion();

        if ($this->marca_id==0) {
           Marca::create([
                'brand_name' =>$this->brand_name,
                'brand_code' =>$this->brand_code,
                'brand_email'  => $this->brand_email,
                'brand_address' =>$this->brand_address,
                'brand_image' =>$this->brand_image,
                'brand_code_postal' =>$this->brand_code_postal,
                'brand_telefono' =>$this->brand_telefono,
                'brand_web' =>$this->brand_web,
                'brand_estado' => $this->brand_estado,
                'brand_ubigeo' =>$this->brand_ubigeo
           ]);
           session()->flash('status', 'Datos guardados.');
        }else{
            $marca = Marca::FindOrFail($this->marca_id);
            $marca->brand_name =$this->brand_name;
            $marca->brand_code =$this->brand_code;
            $marca->brand_email =$this->brand_email;
            $marca->brand_address =$this->brand_address;
            $marca->brand_image =$this->brand_image;
            $marca->brand_code_postal =$this->brand_code_postal;
            $marca->brand_telefono =$this->brand_telefono;
            $marca->brand_web =$this->brand_web;
            $marca->brand_ubigeo =$this->brand_ubigeo;
            $marca->brand_estado = $this->brand_estado;
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
    public function validacion()
    {
        $roles = [
            'brand_code'=>'required|min:11|numeric',
            'brand_ubigeo'=>'required|numeric',
            'brand_telefono'=>'nullable|min:7|string',
            'brand_address'=>'nullable|string|max:191',
            'brand_code_postal'=>'nullable|string|max:191',
            'brand_web'=>'required|url',
            'brand_email'=>'required|email'
        ];
        if($this->marca_id==0){

            $roles['brand_name'] = 'required|min:5|max:191|unique:marcas';

        }else{

            $roles['brand_name'] = 'required|min:5|max:191|unique:marcas,'.$this->marca_id;

        }


        $this->validate($roles,[
            'brand_name.required'=>'La la razón social es obligatorio',
            'brand_name.min'=>'La razón social debe contener al menos :min caracteres',
            'brand_name.max'=>'La razón social debe contener menos de :max caracteres.',
            'brand_name.unique'=>'El valor de la razón social ya está en uso.',
            'brand_code.required'=>'El RUC/DOI es obligatorio.',
            'brand_code.min'=>'El RUC/DOI debe tener almenos :min números.',
            'brand_code.numeric'=>'El RUC/DOI debe ser de un número.',
            'brand_telefono.min' =>'El teléfono debe contener al menos :min números.',
            'brand_address.max' =>'La dirección debe contener menos de :max caracteres.',
            'brand_web.required' =>'La url sitio web es obligatorio',
            'brand_web.url' =>'La url es de formato inválido',
            'brand_email.required' =>'El email es obligatorio',
            'brand_email.email' =>'El email es de formato inválido',
            'brand_ubigeo.required'=>'Debe seleccionar el departamento la provincia y distrito de la ubicación de la institución',
            'brand_ubigeo.numeric'=>'El ubigeo dene se un número'
        ]);
    }

}
