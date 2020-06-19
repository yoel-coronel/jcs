<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ubigeo;

class SelectsUbigeos extends Component
{
    public $departamentos;
    public $provincias;
    public $distritos;

    public $dpt_id;
    public $prov_id = 0;
    public $dist_id = 0;

    protected $listeners = ['AuloadUbigeo' => 'UpdatedUbigeo'];

    public function mount(){
        $this->departamentos = Ubigeo::where('nivel',1)->get();
        $this->provincias = [];
        $this->distritos = [];
    }
    public function UpdatedUbigeo($id){

        $distrito = Ubigeo::where('code',$id)->where('nivel',3)->first();
        if ($distrito){
            $prov = Ubigeo::where('code',$distrito->parent_id)->where('nivel',2)->first();

            if ($prov){
                $this->dist_id = $id;
                $this->prov_id = $prov->code;
                $this->dpt_id = $prov->parent_id;
                $this->provincias = Ubigeo::where('parent_id',$this->dpt_id)->where('nivel',2)->get();
                $this->distritos = Ubigeo::where('parent_id',$this->prov_id)->where('nivel',3)->get();
            }
        }
    }
    public function updated(){


        $this->provincias = Ubigeo::where('parent_id',$this->dpt_id)->where('nivel',2)->get();

        if ($this->prov_id!=0){
            $this->distritos = Ubigeo::where('parent_id',$this->prov_id)->where('nivel',3)->get();
        }

        if ($this->dist_id!=0){
            $this->emit('Ubigeo',$this->dist_id);
        }

    }
    public function render()
    {
        return view('livewire.selects-ubigeos');
    }

}
