<?php

use Src\admin\user\infrastructure\controllers\ExampleGETController;

// Simpele route example
Route::get('/user', [ExampleGETController::class, 'index']);

//Authenticathed route example
// Route::middleware(['auth:sanctum','activitylog'])->get('/', [ExampleGETController::class, 'index']);
