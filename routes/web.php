<?php

use Illuminate\Support\Facades\Route;

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
Route::get('send-email', function()
{
    return \Illuminate\Support\Facades\Mail::send(App\Mail\SendEmail());
});


/*
Route::get('/', 'Views@index')->name('inicial');

Route::get('/admin/lista-produtos', 'Views@listaProducts')->name('admin.list.products');

Route::get('/administracao','Views@admin')->name('admin.admin');

Route::post('/cadastrando', 'Cadastro@cadastro')->name('inicio.cadastro');

Route::post('/logando', 'Login@login')->name('admin');*/
