<?php

use App\Http\Controllers\FlagController;
use App\Http\Controllers\GovernorController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\PresElectorController;
use App\Http\Controllers\SenatorController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('welcome');
});
//states










Route::get('/state', [StateController::class, 'showStateHome']);
Route::get('/newstate', [StateController::class, 'showStateCreate']);
Route::get('/delstate{id}', [StateController::class, 'showStateDelete']);
Route::post('/postState', [StateController::class, 'createState']);
Route::get('/delstate/{id}', [StateController::class, 'deleteState']);
Route::get('/edstate/{id}', [StateController::class, 'updateState']);
Route::put('/edstate/{id}', [StateController::class, 'update']);
//flags
Route::get('/flag', [FlagController::class, 'showFlagHome']);
Route::get('/newflag', [FlagController::class, 'showFlagCreate']);
Route::get('/delflag/{id}', [FlagController::class, 'deleteFlag']);
Route::post('/postflag', [FlagController::class, 'createFlag']);
Route::get('/edflag/{id}', [FlagController::class, 'updateFlag']);
Route::put('/edflag/{id}', [FlagController::class, 'update']);
//party
Route::get('/party', [PartyController::class, 'showPartyHome']);
Route::get('/newparty', [PartyController::class, 'showPartyCreate']);
Route::get('/delparty/{id}', [PartyController::class, 'deleteParty']);
Route::post('/postparty', [PartyController::class, 'createParty']);
Route::get('/edparty/{id}', [PartyController::class, 'updateParty']);
Route::put('/edparty/{id}', [PartyController::class,'update']);
//governor
Route::get('/governor', [GovernorController::class, 'showGovernorHome']);
Route::get('/newgovernor', [GovernorController::class, 'showGovernorCreate']);
Route::post('/postgovernor', [GovernorController::class, 'createGovernor']);
Route::get('/delgovernor/{id}', [GovernorController::class, 'deleteGovernor']);
Route::get('/edgovernor/{id}', [GovernorController::class, 'updateGovernor']);
Route::put('/edgovernor/{id}', [GovernorController::class, 'update']);
//senator
Route::get('/senator', [SenatorController::class, 'showSenatorHome']);
Route::get('/newsenator', [SenatorController::class, 'showSenatorCreate']);
Route::post('/postsenator', [SenatorController::class, 'createSenator']);
Route::get('/delsenator/{id}', [SenatorController::class, 'deleteSenator']);
Route::get('/edsenator/{id}', [SenatorController::class, 'updateSenator']);
Route::put('/edsenator/{id}', [SenatorController::class, 'update']);
//elector
Route::get('/elector', [PresElectorController::class, 'showElectorHome']);
Route::get('/newElector', [PresElectorController::class, 'showElectorCreate']);
Route::post('/postelector', [PresElectorController::class, 'createelector']);
Route::get('/delelector/{id}', [PresElectorController::class, 'deleteelector']);
Route::get('/edelector/{id}', [PresElectorController::class, 'updateelector']);
Route::put('/edelector/{id}', [PresElectorController::class, 'update']);
