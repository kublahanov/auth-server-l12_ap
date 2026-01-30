<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request): JsonResponse
    {
        // var_dump('sdasdasd');
        // exit;

        return response()->json([
            'user' => $request->user(),
            'authenticated_at' => now()->toDateTimeString(),
        ]);
    }
}
