<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alumno;

class Alumnos extends Component
{
    //definir variables 
    public $alumnos, $name, $mail, $code, $n_tel, $direccion;
    public $modal = false;

    public function index()
    {
        $alumnos = Alumno::all();
        return view('livewire.alumnos', compact('alumnos'));
    }
    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function abrirModal(){
        $this-> modal = true;
    }
    public function cerrarModal(){
        $this-> modal = false;
    }
    public function limpiarCampos(){
        $this-> nombre = '';
        $this-> code = '';
        $this-> n_tel = '';
        $this-> direccion = '';
        $this-> mail = '';

    }
}   
