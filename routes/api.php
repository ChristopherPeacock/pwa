<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/submit', function (Request $request) {
    // Handle the POST request here
    $data = $request->all();
    // Process the data as needed
    return response()->json(['message' => 'Data received', 'data' => $data]);
});