<?php

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/notes/{name}",[NoteController::class,"index"])->name("notes");
Route::post("/notesst",[NoteController::class,"store"])->name("storenotes");
Route::get("/decorate",[NoteController::class,"decorate"])->name("decorate");

