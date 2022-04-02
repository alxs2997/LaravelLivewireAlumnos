<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alumno;

class Alumnos extends Component
{
    //definir variables 
    public $alumnos, $name, $mail, $code, $n_tel, $direccion;
    public $modal = false;

    
    public function render()
    {
        $this->alumnos = Alumno::all();
        return view('livewire.alumnos');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal() {
        $this->modal = true;
    }
    public function cerrarModal() {
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this-> nombre = '';
        $this-> code = '';
        $this-> n_tel = '';
        $this-> direccion = '';
        $this-> mail = '';
    }
    public function editar($id)
    {
        $alumnos = Alumno::findOrFail($id);
        $this->id = $id;
        $this->nombre = $alumnos->nombre;
        $this->code = $alumnos->code;
        $this->n_tel = $alumnos->n_tel;
        $this->direccion = $alumnos->direccion;
        $this->mail = $alumnos->mail;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Alumno::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
            Alumno::updateOrCreate(['id'=>$this->id],
            [
                'nombre' => $this->name,
                'code' => $this->code,
                'n_tel'=>$this->n_tel,
                'direccion'=>$this->direccion,
                'mail'=>$this->mail,
            ]);
         
         session()->flash('message',
            $this->id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
   
