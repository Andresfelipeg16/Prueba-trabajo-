<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "welcome";
});

Route :: get('/posts',function (){
    return "Aqui se listaran los post";
});

Route :: get ('/posts/{post}/{categoria?}',function ($post,$categoria = null){

    if($categoria){
        return "Aqui mostraremos el post $post, en la categoria $categoria";
    }else{
        return "Aqui mostraremos el post $post";
    }
});
//get: obtener informacion
//post : crear informacion
//put : actualizar
//delete : borrar
//patch : actualizar parcial
