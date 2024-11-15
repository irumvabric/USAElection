<?php

namespace App\Http\Controllers;

use App\Models\StateModel;
use Illuminate\Http\Request;
use App\Models\StateModel;

class StateController extends Controller
{
    public function showStateCreate(){

        return view('statehome');
    }
    public function showStateHome(){
        $states = StateModel::all();
<<<<<<< HEAD

        return view('states.homestate', ['states' => $states]);
=======
        return view('states.homestate',['states'=>$states]);
>>>>>>> 585fef36684d830494f88057df514b6afedb8ccd
    }
    public function showStateDelete(){
        return view('states.deletestate');
    }
    public function createState(Request $request){
        $request->validate([
            'code' => ['required','min:1','max:3'],
            'name' => ['required','min:1','max:3'],
            'pib' => 'required|double',
            'population' => 'required|double|min:1',
            'area' => 'required|double|min:1',
        ]);
        State::create($request->all());
        return redirect('/state')->with('status', 'State added');
    }

    public function updateState(int $id){
        $state = State::findOrfail($id);
        return view('states.stateedit',['state'=>$state]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'code' => ['required','min:1','max:3'],
            'name' => ['required','min:1','max:3'],
            'pib' => 'required|double',
            'population' => 'required|double|min:1',
            'area' => 'required|double|min:1',
        ]);
        State::findOrfail($id)->update($req->all());
        return redirect('/state')->with('status', 'State updated');
    }
    public function deleteState(int $id){
        $state = State::findOrfail($id);
        $state->delete();
        return redirect('/state')->with('status', 'State deleted');
    }
}
