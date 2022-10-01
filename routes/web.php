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
    return redirect('/cursos/create');
});
Route::resource('cursos', CursoController::class)
    ->only(['index', 'create', 'store']);
Route::post('/cursos/destroy/{id}',[CursoController::class, 'destroy'])
    ->name('curso.destroy');
