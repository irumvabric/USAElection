<?php

use App\Http\Controllers\FlagController;
use App\Http\Controllers\GovernorController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\PresElectorController;
use App\Http\Controllers\SenatorController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/state', [StateController::class, 'showStateHome']);
Route::get('/flag', [FlagController::class, 'showFlagHome']);
Route::get('/party', [PartyController::class, 'showPartyHome']);
Route::get('/governor', [GovernorController::class, 'showGovernorHome']);
Route::get('/senator', [SenatorController::class, 'showSenatorHome']);
Route::get('/presElector', [PresElectorController::class, 'showElectorHome']);
