<?php
use App\Http\Controllers\CursoController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/criar', [CursoController::class, 'create']);
Route::post('/cursos/salvar', [CursoController::class, 'store']);