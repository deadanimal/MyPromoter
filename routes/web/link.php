<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LinkController;

Route::middleware('auth')->group(function () {

    Route::get('/links', [LinkController::class, 'list_links']);
    Route::get('/links/{link_id}', [LinkController::class, 'detail_link']);
    Route::post('/links', [LinkController::class, 'create_link']);
    Route::put('/links/{link_id}', [LinkController::class, 'update_link']);  

    Route::get('/go/{link_id}', [LinkController::class, 'goto_link']);

});