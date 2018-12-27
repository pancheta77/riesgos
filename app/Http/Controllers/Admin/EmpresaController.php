<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empresa;
use App\MatrizRiesgo;

class EmpresaController extends Controller
{
  public function index(){
    $empresas = Empresa::all();
    return view('admin.empresas.index', compact('empresas'));
  }

  public function analisis(Empresa $empresa){
    // select activos.empresaId,activos.nombre, matriz_riesgos.ponderacion
	  //  from amenazas inner join  activos
		//     on (activos.id = amenazas.activoId)
	  //    inner join matriz_riesgos
		//     on amenazas.matrizRiesgoId = matriz_riesgos.id
    //   order by activos.empresaId

    $datos = \DB::table('amenazas')
                  ->join('activos', 'activos.id', '=', 'amenazas.activoId')
                  ->where('empresaId', $empresa->id)
                  ->join('matriz_riesgos', 'amenazas.matrizRiesgoId', '=', 'matriz_riesgos.id')
                  ->join('empresas', 'activos.empresaId', '=', 'empresas.id')
                  ->select('activos.empresaId', 'activos.nombre', 'amenazas.detalle', 'empresas.razonSocial', 'matriz_riesgos.riesgo', 'matriz_riesgos.ponderacion')
                  ->get();
    // dd($datos);
    return view('admin.analisis', compact('datos'));
  }

  public function matriz(){
    $matriz = MatrizRiesgo::all();
    // dd($matriz);
    return view('admin.empresas.matriz', compact('matriz'));
  }

}
