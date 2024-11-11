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
Route::get('/newstate', [StateController::class, 'showStateCreate']);
Route::get('/delstate', [StateController::class, 'showStateDelete']);
Route::get('/flag', [FlagController::class, 'showFlagHome']);
Route::get('/newflag', [FlagController::class, 'showFlagCreate']);
Route::get('/delflag', [FlagController::class, 'showFlagDelete']);
Route::get('/party', [PartyController::class, 'showPartyHome']);
Route::get('/newparty', [PartyController::class, 'showPartyCreate']);
Route::get('/delparty', [PartyController::class, 'showPartyDelete']);
Route::get('/governor', [GovernorController::class, 'showGovernorHome']);
Route::get('/newgovernor', [GovernorController::class, 'showGovernorCreate']);
Route::get('/delgovernor', [GovernorController::class, 'showGovernorDelete']);
Route::get('/senator', [SenatorController::class, 'showSenatorHome']);
Route::get('/newsenator', [SenatorController::class, 'showSenatorCreate']);
Route::get('/delsenator', [SenatorController::class, 'showSenatorDelete']);
Route::get('/presElector', [PresElectorController::class, 'showElectorHome']);
Route::get('/newElector', [PresElectorController::class, 'showElectorCreate']);
Route::get('/delElector', [PresElectorController::class, 'showElectorDelete']);
