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

Route::get('/','FrontController@getIndex');
Route::get('/back/index','BackController@getIndex');

Route::get('/contacto','PrivateController@getContacto');
Route::get('/datos','PrivateController@getDatos');
Route::post('/datos','PrivateController@postDatos');
Route::get('/carta','FrontController@getCarta');
Route::get('/eventos','FrontController@getEventos');


Route::get('/reserva','PrivateController@getReserva');
Route::put('reserva','PrivateController@putReserva');
Route::get('datos','PrivateController@getDatos');

Route::get('/admin','BackController@getIndex');
Route::post('/admin/updateUser','BackController@postUpdateUser');


Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/{page}','FrontController@getPage');



Route::post('/reserva','Auth\Login_publicController@login');



Route::get('/admin/menus','BackMenusController@getMenus');
Route::post('admin/menus','BackMenusController@postMenus');
Route::post("admin/menus/desactivar","BackMenusController@postDesactivar");//AJAX
Route::post("admin/menus/borrar","BackMenusController@postBorrar");//AJAX
Route::get("admin/menus/editar/{id}","BackMenusController@getEditar");
Route::post("admin/menus/update","BackMenusController@postUpdate");

Route::get('admin/carta','BackCartaController@getCarta');
Route::post('admin/categorias','BackCartaController@postCategorias');
Route::post("admin/categorias/desactivar","BackCartaController@postDesactivarCategorias");//AJAX
Route::post("admin/categorias/borrar","BackCartaController@postBorrarCategorias");//AJAX
Route::get("admin/categorias/editar/{id}","BackCartaController@getEditarCategorias");
Route::get("admin/carta/editar/{id}","BackCartaController@getEditar");
Route::post("admin/categorias/update","BackCartaController@postUpdateCategorias");
Route::post("admin/platos","BackCartaController@postPlatos");
Route::post("admin/platos/update","BackCartaController@postUpdatePlatos");
Route::post("admin/platos/desactivar","BackCartaController@postDesactivarPlatos");//AJAX
Route::post("admin/platos/borrar","BackCartaController@postBorrarPlatos");//AJAX

Route::get('admin/eventos','BackEventosController@getEventos');
Route::post('admin/eventos','BackEventosController@postEventos');
Route::get("admin/eventos/editar/{id}","BackEventosController@getEditar");
Route::post('admin/eventos/update','BackEventosController@postUpdate');
Route::post('admin/eventos/desactivar','BackEventosController@postDesactivar');//AJAX
Route::post('admin/eventos/borrar','BackEventosController@postBorrar');//AJAX
Route::post('admin/eventos/mail','BackEventosController@postMail');

Route::get('admin/usuarios','BackUsuariosController@getUsuarios');
Route::post('admin/usuarios','BackUsuariosController@postUsuarios');
Route::get('admin/usuarios/editar/{id}','BackUsuariosController@getEditar');
Route::post('admin/usuarios/update','BackUsuariosController@postUpdate');
Route::post('admin/usuarios/desactivar','BackUsuariosController@postDesactivar');//AJAX
Route::post('admin/usuarios/borrar','BackUsuariosController@postBorrar');//AJAX

Route::get('admin/reservas','BackReservasController@getReservas');
Route::post('admin/reservas','BackReservasController@postReservas');
Route::post('admin/reservas/anular','BackReservasController@postAnular');




