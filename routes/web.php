<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/notes', [NoteController::class, 'showNotesView'])->name('all.notes')->middleware('permission:notlar.menu'); 
    Route::get('/api/notes', [NoteController::class, 'notes']);
    Route::post('/api/notes', [NoteController::class, 'store']);
    Route::get('/api/notes/{id}', [NoteController::class, 'show']);
    Route::put('/api/notes/{id}', [NoteController::class, 'update']);
    Route::delete('/api/notes/{id}', [NoteController::class, 'destroy']);

->middleware('permission:notlar.menu'); //Spatie permission paketi için menü gösterim middleware yapısıdır. Kaldırabilirsiniz.
