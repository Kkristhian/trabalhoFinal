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

Route::get('/Inicial/ConsultaFuncionario', 'ControllerFuncionario@getConsultaFuncionario');
Route::get('/Inicial/CadastroFuncionario', 'ControllerFuncionario@getCadastroFuncionario');
Route::get('/Inicial/ConsultaTerritorio', 'ControllerTerritorio@getConsultaTerritorio');
Route::get('/Inicial/CadastroTerritorio', 'ControllerTerritorio@getCadastroTerritorio');
Route::get('/Inicial/ConsultaRegiao', 'ControllerRegiao@getConsultaRegiao');
Route::get('/Inicial/CadastroRegiao', 'ControllerRegiao@getCadastroRegiao');
Route::get('/Inicial', 'ControllerPrincipal@getInicial');
