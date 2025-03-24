<?php

// routes/api.php

use App\Http\Controllers\EstudianteController;

Route::prefix('api')->group(function() {
    Route::get('/estudiantes', [EstudianteController::class, 'index']);
    Route::post('/estudiantes', [EstudianteController::class, 'store']);
});
