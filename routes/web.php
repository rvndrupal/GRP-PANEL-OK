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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('admin', function () {
    return view('admin.panel');
})->middleware('auth')->name('admin.page');


//Auth::routes();

//rutas template.

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


//rutas template

Route::get('/home', 'HomeController@index')->name('home');


//Se crean las rutas del sistema
//MUY IMPORTANTE AGREGAR EL MIDDLAWERE AL ARCHIVO kERNEL.PHP

Route::middleware(['auth'])->group(function(){


    Route::get('/listado_usuarios', 'UsuariosController@listado_usuarios');
    Route::post('crear_usuario', 'UsuariosController@crear_usuario');
    Route::post('editar_usuario', 'UsuariosController@editar_usuario');
    Route::post('buscar_usuario', 'UsuariosController@buscar_usuario');
    Route::post('borrar_usuario', 'UsuariosController@borrar_usuario');
    Route::post('editar_acceso', 'UsuariosController@editar_acceso');


    Route::post('crear_rol', 'UsuariosController@crear_rol');
    Route::post('crear_permiso', 'UsuariosController@crear_permiso');
    Route::post('asignar_permiso', 'UsuariosController@asignar_permiso');
    Route::get('quitar_permiso/{idrol}/{idper}', 'UsuariosController@quitar_permiso');


    Route::get('form_nuevo_usuario', 'UsuariosController@form_nuevo_usuario');
    Route::get('form_nuevo_rol', 'UsuariosController@form_nuevo_rol');
    Route::get('form_nuevo_permiso', 'UsuariosController@form_nuevo_permiso');
    Route::get('form_editar_usuario/{id}', 'UsuariosController@form_editar_usuario');
    Route::get('confirmacion_borrado_usuario/{idusuario}', 'UsuariosController@confirmacion_borrado_usuario');
    Route::get('asignar_rol/{idusu}/{idrol}', 'UsuariosController@asignar_rol');
    Route::get('quitar_rol/{idusu}/{idrol}', 'UsuariosController@quitar_rol');
    Route::get('form_borrado_usuario/{idusu}', 'UsuariosController@form_borrado_usuario');
    Route::get('borrar_rol/{idrol}', 'UsuariosController@borrar_rol');




});


