<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PromoterController;

Route::middleware('auth')->group(function () {

    Route::get('/promoters', [PromoterController::class, 'list_promoters']);
    Route::get('/promoters/{promoter_id}', [PromoterController::class, 'detail_promoter']);
    Route::post('/promoters', [PromoterController::class, 'create_promoter']);
    Route::put('/promoters/{promoter_id}', [PromoterController::class, 'update_promoter']);  

});