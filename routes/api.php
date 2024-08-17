<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tbl_LivrosController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/',function(){return Response()->json(['Sucesso'=>true]);});
Route::get('/livros',[tbl_LivrosController::class,'index']);
Route::get('/livros/{id}',[tbl_LivrosController::class,'show']);
Route::post('/livros',[tbl_LivrosController::class,'store']);
Route::put('/livros/{id}',[tbl_LivrosController::class,'update']);
?>
