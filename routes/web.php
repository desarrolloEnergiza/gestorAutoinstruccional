<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CursoController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::view('/create-user', 'create-user')->name('create-user');

Route::view('/create-student', 'create-student')->name('create-student');

Route::view('/create-course', 'create-course')->name('crear-curso');
Route::view('/crear-curso', 'crear_curso')->name('crear-curso');

Route::get('/modify-course', [ApiController::class, 'getCursosFromApiAndShowInView'])->name('modify-course');




Route::get('/test-mongodb', function () {
    $cursos = Curso::all();
    return response()->json($cursos);
});


Route::get('/obtener-cursos-desde-api', [ApiController::class, 'getCursosFromApi']);


Route::post('/crear-curso', [CursoController::class, 'crearCurso'])->name('crear-curso');


    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
