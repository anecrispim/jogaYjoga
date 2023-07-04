<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rotas jogos

Route::get('/main-game', [App\Http\Controllers\ScoreController::class, 'index'])->name('score.index');
Route::get('/main-game/score-detail', [App\Http\Controllers\ScoreController::class, 'detail'])->name('score.detail');

Route::get('/snake-game', [App\Http\Controllers\SnakeController::class, 'index'])->name('snake.index');
Route::get('/snake-game/snake_score_detail', [App\Http\Controllers\SnakeController::class, 'snake_score_detail'])->name('snake_score_detail.detail');


Route::get('/kill-bird', [App\Http\Controllers\KillBirdController::class, 'index'])->name('kill-bird.index');
Route::get('/kill-bird/kill-bird-score-detail', [App\Http\Controllers\KillBirdController::class, 'detail'])->name('kill-bird-score.detail');


Route::get('/ping-pong', [App\Http\Controllers\ScoreController::class, 'ping_pong'])->name('ping_pong.index');
Route::get('/ping-pong/ping-pong-score-detail', [App\Http\Controllers\ScoreController::class, 'detial'])->name('ping-pong-score.detail');