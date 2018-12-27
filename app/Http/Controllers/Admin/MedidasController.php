<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Amenaza;
use App\Medida;

class MedidasController extends Controller
{
  public function show(Amenaza $amenaza){
      $medidas = Medida::where('amenazaId', $amenaza->id)
                          ->get();
      return view('admin.medidas.index', compact('medidas', 'amenaza'));
  }

  public function create(Amenaza $amenaza){
    return view('admin.medidas.create', compact('amenaza'));
  }

  public function store(Request $request){
    $this->validate($request, [
        'descripcion' => 'required',
        'tipoMedida' => 'required',
      ]);

    Medida::create($request->all());

    $amenaza = Amenaza::find($request->get('amenazaId'));
    return redirect()->route('admin.medidas.show', compact('amenaza'));
  }

}
