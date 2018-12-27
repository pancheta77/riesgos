<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');

Route::group([
  'prefix' => 'admin',
  'namespace' => 'Admin',
  'middleware' => 'auth'],
function(){
  // Rutas de administracion - dashboard
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  // Rutas para las empresas
  Route::get('empresas', 'EmpresaController@index')->name('admin.empresas.index');
  Route::get('empresas/{empresa}', 'EmpresaController@analisis')->name('admin.analisis');
  Route::get('matriz', 'EmpresaController@matriz')->name('admin.empresas.matriz');
  // Rutas para los activos
  Route::get('activos/{empresa}', 'ActivosController@show')->name('admin.activos.show');
  Route::get('activos/{empresa}/create', 'ActivosController@create')->name('admin.activos.create');
  Route::post('activos', 'ActivosController@store')->name('admin.activos.store');

  // Rutas para las amenazas
  Route::get('amenazas/{activo}', 'AmenazasController@show')->name('admin.amenazas.show');
  Route::get('amenazas/{activo}/create', 'AmenazasController@create')->name('admin.amenazas.create');
  Route::post('amenazas', 'AmenazasController@store')->name('admin.amenazas.store');
  Route::get('amenazas/{activo}/edit/{amenaza}', 'AmenazasController@edit');
  Route::put('amenazas/{amenaza}', 'AmenazasController@update')->name('admin.amenazas.update');
  // Rutas para las medidas
  Route::get('medidas/{amenaza}', 'MedidasController@show')->name('admin.medidas.show');
  Route::get('medidas/{amenaza}/create', 'MedidasController@create')->name('admin.medidas.create');
  Route::post('medidas', 'MedidasController@store')->name('admin.medidas.store');

});

// Authentication Routes...
 Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
 Route::post('login', 'Auth\LoginController@login');
 Route::post('logout', 'Auth\LoginController@logout')->name('logout');

 // Registration Routes...
 // if ($options['register'] ?? true) {
 //     Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
 //     Route::post('register', 'Auth\RegisterController@register');
 // }

 // Password Reset Routes...
 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
