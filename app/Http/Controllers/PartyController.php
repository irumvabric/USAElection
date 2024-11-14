<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartyModel;

class PartyController extends Controller
{
    public function showPartyCreate(){
        
        return view('partyhome');
    }
    public function showPartyHome(){
        $parties = PartyModel::all();
        return view('party.homeparty',['parties'=>$parties]);
    }
    public function showPartyDelete(){
        return view('party.deleteparty');
    }
}
