<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class AdminController extends Controller
{
  public function index(){
      $fecha = Carbon::now();
      return view('admin.dashboard', compact('fecha'));
  }

}
