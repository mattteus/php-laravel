<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PostagemController;

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

Route::get('/', function () {return view('welcome');//futuramente colocarei a pagina de login do usuario aqui
});
Route::get('/principal', [UsuarioController::class,'listar'
]);//a cada requisição, ele chama uma função de uma classe(nesta classe lista o usuario com as suas devidas ligação com a postagem)


//usuario
Route::get('/usuario/listar', [UsuarioController::class,'listarusuario'
]);
Route::get('/usuario/adicionarusuario', [UsuarioController::class,'adicionarusuario'
]);
Route::post('/usuario/salvarusuario', [UsuarioController::class,'salvarusuario'
]);
Route::get('/usuario/editarusuario/{id}', [UsuarioController::class,'editarusuario'
]);
Route::get('/usuario/excluirusuario/{id}', [UsuarioController::class,'excluirusuario'
]);

//postagem

Route::get('/postagem/adicionarapostagem', [PostagemController::class,'adicionarpostagem'
]);
Route::post('/postagem/salvarpostagem', [PostagemController::class,'salvarpostagem'
]);
Route::get('/postagem/editarpostagem/{id}', [PostagemController::class,'editarpostagem'
]);
Route::get('/postagem/excluirpostagem/{id}', [PostagemController::class,'excluirpostagem'
]);
