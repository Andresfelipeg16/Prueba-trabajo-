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

Route:: get ('/posts/post-1',function (){
    return "Aqui se editara el post 1";
});

Route :: get ('/posts/post-2', function (){
    return "Aqui se mostrarae el post 2";
});

Route :: get ('/posts/post-3', function (){
    return "Aqui se mostrarae el post 3";
});

//get: obtener informacion
//post : crear informacion
//put : actualizar
//delete : borrar
//patch : actualizar parcial
