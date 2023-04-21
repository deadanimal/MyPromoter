<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProgramController;

Route::middleware('auth')->group(function () {

    Route::get('/programs', [ProgramController::class, 'list_programs']);
    Route::get('/programs/{program_id}', [ProgramController::class, 'detail_program']);
    Route::post('/programs', [ProgramController::class, 'create_program']);
    Route::put('/programs/{program_id}', [ProgramController::class, 'update_program']);  

});