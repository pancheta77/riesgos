<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Activo;
use App\Empresa;

class ActivosController extends Controller
{
  // public function index(){
  //   $activos = Activos::all();
  //   return view('admin.activos.index', compact('activos'));
  // }

  public function show(Empresa $empresa){
      $activos = Activo::where('empresaId', $empresa->id)
                          ->get();
      return view('admin.activos.index', compact('empresa', 'activos'));
    }

  public function create(Empresa $empresa){
    return view('admin.activos.create', compact('empresa'));
  }

  public function store(Request $request){
    $this->validate($request, [
        'nombre' => 'required|max:60',
        'descripcion' => 'required|max:60',
        'responsable' => 'required|max:60',
        'ubicacion' => 'required|max:60',
        'critico' => 'required',
      ]);
      // dd($request);
      Activo::create($request->all());

      $empresa = Empresa::find($request->get('empresaId'));
      return redirect()->route('admin.activos.show', compact('empresa'));
  }
}
