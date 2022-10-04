<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\notesController;
/*ss
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [notesController::class, 'show']);

Route::get('delete/{id}', [notesController::class, 'destroy']);

Route::get('create', [notesController::class, 'create']);

Route::post('create', [notesController::class, 'store']);

Route::get('edit/{id}', [notesController::class, 'edit']);

Route::post('update/{id}', [notesController::class, 'update'])->name('update');

Route::get('accounts', [notesController::class, 'accounts']);

Route::get('bom', [notesController::class, 'bom']);

Route::get('economics', [notesController::class, 'economics']);

Route::get('statics', [notesController::class, 'statics']);

Route::get('english', [notesController::class, 'english']);

Route::get('computer', [notesController::class, 'computer']);
