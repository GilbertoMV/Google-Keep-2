<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


//GET all archived notes route
Route::get('v1/notes/archived', [NoteController::class, 'archived']);

//GET all notes route
Route::get('v1/notes', [NoteController::class, 'index']);

//POST a note route
Route::post('v1/notes', [NoteController::class, 'store']);

//GET a note by id route
Route::get('v1/notes/{note}',[NoteController::class, 'show']);

//PUT a note by id route
Route::put('v1/notes/{note}', [NoteController::class, 'update']);

//DELETE a note by id route
Route::delete('v1/notes/{note}', [NoteController::class, 'destroy']);

//POST a archive note route
Route::post('v1/notes/{note}/archive', [NoteController::class, 'archive']);

