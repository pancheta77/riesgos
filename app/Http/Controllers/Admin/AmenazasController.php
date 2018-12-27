<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Amenaza;
use App\Activo;

class AmenazasController extends Controller
{
  public function show(Activo $activo){
      $amenazas = Amenaza::where('activoId', $activo->id)
                          ->get();
      return view('admin.amenazas.index', compact('activo', 'amenazas'));
  }

  public function create(Activo $activo){
    return view('admin.amenazas.create', compact('activo'));
  }

  public function store(Request $request){
    $this->validate($request, [
        'detalle' => 'required|max:60',
        'probabilidad' => 'required',
        'impacto' => 'required',
      ]);

    // dd($request);
    $riesgo = \DB::table('matriz_riesgos')
              ->where('probabilidad', $request->get('probabilidad'))
              ->where('impacto', $request->get('impacto'))
              ->get();
    // dd($riesgo);
    $amenaza = new Amenaza;
    $amenaza->activoId = $request->get('activoId');
    $amenaza->detalle = $request->get('detalle');
    $amenaza->probabilidad = $request->get('probabilidad');
    $amenaza->impacto = $request->get('impacto');
    $amenaza->matrizRiesgoId = $riesgo[0]->id;
    // dd($amenaza);
    $amenaza->save();

    $activo = Activo::find($request->get('activoId'));
    return redirect()->route('admin.amenazas.show', compact('activo'));
  }

  public function edit(Activo $activo, Amenaza $amenaza){
    return view('admin.amenazas.edit', compact('activo', 'amenaza'));
  }

  public function update(Request $request, Amenaza $amenaza){
    $this->validate($request, [
        'detalle' => 'required|max:60',
        'probabilidad' => 'required',
        'impacto' => 'required',
      ]);

    // dd($request);
    $riesgo = \DB::table('matriz_riesgos')
              ->where('probabilidad', $request->get('probabilidad'))
              ->where('impacto', $request->get('impacto'))
              ->get();
    // dd($riesgo);
    $amenaza->activoId = $request->get('activoId');
    $amenaza->detalle = $request->get('detalle');
    $amenaza->probabilidad = $request->get('probabilidad');
    $amenaza->impacto = $request->get('impacto');
    $amenaza->matrizRiesgoId = $riesgo[0]->id;
    // dd($amenaza);
    $amenaza->save();

    $activo = Activo::find($request->get('activoId'));
    return redirect()->route('admin.amenazas.show', compact('activo'));
  }
}
