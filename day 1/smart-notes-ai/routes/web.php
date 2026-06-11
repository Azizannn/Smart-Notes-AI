<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\QuizController;
use App\Http\Middleware\CheckLogin;
use function Laravel\Ai\{agent};

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::POST('/logout', [AuthController::class, 'logout']);

Route::get('/', [DashboardController::class, 'index'])->middleware(CheckLogin::class);
Route::get('/notes', [NoteController::class, 'index'])->middleware(CheckLogin::class);
Route::get('/quiz', [QuizController::class, 'index'])->middleware(CheckLogin::class);
Route::get('/show-quiz', [QuizController::class, 'show'])->middleware(CheckLogin::class);

Route::get('/playground-ai', function (){
    $response = agent(
        instructions: 'Kamu Adalah seorang mentor laravel yang membantu saya belajar pemrograman lalu berikan jawaban yang singkat, jelas, dan mudah dipahami.'
    )->prompt('Apa itu Laravel?');

    dd($response);
});