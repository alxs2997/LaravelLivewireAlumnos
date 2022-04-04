<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alumno;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class Alumnos extends Component
{
    //definir variables 
    public $alumnos, $name, $mail, $code, $n_tel, $direccion;
    public $modal = false;

    
    public function index()
    {
        //
        $alumnos = Alumno::all();
        return view('livewire.alumnos', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('livewire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datos=$request->all();
        Log::info($datos);
        Alumno::create($datos);

        $alumnos = Alumno::all();
        return view('livewire.alumnos', compact('alumnos'));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumnos)
    {
        // 
        
        return view('livewire.show', compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumnos $alumnos)
    {
        //
        return view('alumnos.edit', compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    
    {
        $alumnoss=Alumno::find($id);
        $alumnos->name = $request->name;
        $alumnos->code = $request->code;
        $alumnos->direccion = $request->direccion;
        $alumnos->n_tel = $request->n_tel;
        $alumnos->save();
        return redirect('alumnos');
    }  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumnos $alumnos)
    {
        //
        $alumnos->delete();

        return redirect()->route('alumnos.index');

    }
}
