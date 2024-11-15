<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elector;
use App\Models\State;
use App\Models\Party;

class PresElectorController extends Controller
{
    public function showElectorHome(){
        $electors = Elector::all();
        return view('electors.homeelectors',['electors'=> $electors]);
    }
    public function showElectorCreate(){
        $states= State::all();
        $parties = Party::all();
        return view('preselectorhome',['states'=>$states,'parties'=>$parties]);
    }
    public function showElectorDelete(){
        return view('electors.deleteelectors');
    }
    public function createelector(Request $request){
        $request->validate([
            'name_elector' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
        ]);
        Elector::create([
            'name_elector'=> $request->name_elector,
            'gender'=> $request->gender,
            'party_id'=> $request->party_id,
            'state_id'=> $request->state_id,
        ]);
        return redirect('/elector')->with('status', 'Elector added');
    }
    public function updateelector(int $id){
        $elector = Elector::findOrfail($id);
        $states= State::all();
        $parties = Party::all();
        return view('electors.preselectoredit',['states'=>$states,'parties'=>$parties,'elector'=>$elector]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'name_elector' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
        ]);
        Elector::findOrfail($id)->update($req->all());
        return redirect('/elector')->with('status', 'Elector updated');
    }
    public function deleteelector(int $id){
        $elector = Elector::findOrfail($id);
        $elector->delete();
        return redirect('/elector')->with('status', 'Elector deleted');
    }
}
