<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlagModel;

class FlagController extends Controller
{
    public function showFlagHome(){
        $flags = FlagModel::all();
        return view('flags.homeflag',['flags'=>$flags]);
    }
    public function showFlagCreate(){
        return view('flaghome');
    }
    public function showFlagDelete(){
        return view('flags.deleteflag');
    }
    public function createFlag(Request $request){
        $request->validate([
            'image' => ['required',],
        ]);
        FlagModel::create([
            'image'=> $request->image,
        ]);
        return redirect('/flag')->with('status', 'Flag added');
    }
    public function updateFlag(int $id){
        $flag = FlagModel::findOrfail($id);
        return view('flags.flagedit',['flag'=>$flag]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'image' => ['required'],
        ]);
        FlagModel::findOrfail($id)->update($req->all());
        return redirect('/flag')->with('status', 'Flag updated');
    }
    public function deleteFlag(int $id){
        $flag = FlagModel::findOrfail($id);
        $flag->delete();
        return redirect('/flag')->with('status', 'Flag deleted');
    }
}
