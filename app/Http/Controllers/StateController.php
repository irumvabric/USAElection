<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\FlagModel;

class StateController extends Controller
{
    public function showStateCreate(){

        return view('statehome');
    }
    public function showStateHome(){
        $states = State::all();

        return view('states.homestate', ['states' => $states]);
    }
    public function showStateDelete(){
        return view('states.deletestate');
    }
    public function createState(Request $request){
        $request->validate([
            'code' => ['required','min:1','max:3'],
            'name' => ['required','min:3','max:20'],
            'pib' => 'required',
            'population' => 'required|min:1',
            'flag'=>'required',
            'area' => 'required|min:1',
        ]);
        
      $filename = time(). '.' .$request->flag->extension();
      $path = $request->file('flag')->storeAs(
        'FlagsUsa',
        $filename,
        'public'
      );

      
      $state = State::create([
        'code'=>$request->code,
        'name'=> $request->name,
        'pib'=> $request->pib,
        'area'=> $request->area,
        'population'=> $request->population,
       ] );

      $flag = new FlagModel();
      $flag->path = $path;
      $state->flag()->save($flag);
        return redirect('/state')->with('status', 'State added');
    }

    public function updateState(int $id){
        $state = State::findOrfail($id);
        return view('states.stateedit',['state'=>$state]);
    }
    public function update(Request $request, int $id){
        $request->validate([
            'code' => ['required','min:1','max:3'],
            'name' => ['required','min:3','max:20'],
            'pib' => 'required',
            'population' => 'required|min:1',
            'area' => 'required|min:1',
            'flag' => 'required',
        ]);
        
        $state = State::find($id);
        $state->code = $request->code;
        $state->name = $request->name;
        if ($request->hasFile('flag')) {
            $filename = time(). '.' .$request->flag->extension();
            $path = $request->file('flag')->storeAs(
              'FlagsUsa',
              $filename,
              'public'
            );
            $state->flag->path = $path;
            $state->flag->update();
        }
        $state->pib = $request->pib;
        $state->area = $request->area;
        $state->population = $request->population;
        $state->update();

        
        
        return redirect("/detstate/{$id}")->with('status', 'State updated');
    }
    public function deleteState(int $id){
        $state = State::findOrfail($id);
        $state->delete();
        return redirect('/state')->with('status', 'State deleted');
    }
    public function showStateDetails($pk){
        $state = State::findOrFail($pk);

           return view('states.state_details',['state' => $state]);
    }
}

