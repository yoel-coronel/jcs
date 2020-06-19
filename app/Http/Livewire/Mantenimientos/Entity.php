<?php

namespace App\Http\Livewire\Mantenimientos;

use Livewire\Component;
use App\Models\Entidad;

class Entity extends Component
{
    public $ent_id;
    public $ent_secuencia;
    public $ent_nombre;
    public $ent_criterio;
    public $ent_estado;

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
        return view('livewire.entidades.home',[
            "entidades" => Entidad::where('ent_secuencia', 'like', '%'.$this->search.'%')
                ->orWhere('ent_nombre','like', '%'.$this->search.'%')
                ->orWhere('ent_criterio','like', '%'.$this->search.'%')
                ->orderBy('created_at','desc')
                ->paginate($this->totalPaginate),
        ]);

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
        $entity = Entidad::FindOrFail($id);
        $this->ent_nombre    = $entity->ent_nombre;
        $this->ent_criterio  = $entity->ent_criterio;
        $this->ent_estado    = $entity->ent_estado;
        $this->ent_id=$id;
    }
    public function store(){

        $this->validacion();

        if ($this->ent_id == 0) {
            Entidad::create([
                'ent_secuencia' =>Entidad::generateSecuencial($this->ent_criterio),
                'ent_nombre'    =>$this->ent_nombre,
                'ent_criterio'  => $this->ent_criterio,
                'ent_estado'    => $this->ent_estado,
            ]);
            session()->flash('status', 'Datos guardados.');
        }else{
            $ent = Entidad::FindOrFail($this->ent_id);
            $ent->ent_nombre =$this->ent_nombre;
            $ent->ent_criterio =$this->ent_criterio;
            $ent->ent_estado =$this->ent_estado;
            $ent->save();

            session()->flash('status', 'Datos Actualizados.');
        }
        $this->form = 0;

        $this->reset();
    }
    public function validacion()
    {
        $roles = [
            'ent_criterio'=>'required|string',
        ];
        if($this->ent_id==0){

            $roles['ent_nombre'] = 'required|min:2|max:191|unique:entidads';

        }else{

            $roles['ent_nombre'] = 'required|min:2|max:191|unique:entidads,'.$this->ent_id;

        }

        $this->validate($roles,[
            'ent_nombre.required'=>'El nombre de entidad es obligatorio',
            'ent_nombre.min'=>'El nombre de entidad debe contener al menos :min caracteres',
            'ent_nombre.max'=>'El nombre de entidad debe contener menos de :max caracteres.',
            'ent_nombre.unique'=>'El valor ingresado ya está en uso.',
            'ent_criterio.required'=>'El críterio es obligatorio.',
        ]);
    }
}
