<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/user', [UserController::class, 'show']);
//     // Route::apiResource('products', ProductController::class);
//     // Route::apiResource('orders', OrderController::class);
// });

// routes/api.php - временная версия для отладки
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Log::info('User route called', [
        'user_id' => $request->user()?->id,
        'token' => $request->bearerToken() ? 'yes' : 'no'
    ]);

    // Простой ответ без рекурсии
    return response()->json([
        'id' => $request->user()->id,
        'name' => $request->user()->name,
        'email' => $request->user()->email,
        'message' => 'User data retrieved successfully'
    ]);
});
