<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\State;
use App\Models\Party;

class CandidateController extends Controller
{
    public function showCandidateHome(){
        $candidates= Candidate::all();
        return view('candidates.homecandidates',['candidates'=>$candidates]);
    }

    public function showCandidatecreate(){
        $states= State::all();
        $parties = Party::all();
        return view('candidatehome',['states'=>$states,'parties'=>$parties]);
    }

    public function showCandidateDelete(){
        return view('candidates.deletecandidate');
    }

    public function createCandidate(Request $request){
        $request->validate([
            'name_candidate' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
        ]);
        Candidate::create([
            'name_candidate'=> $request->name_candidate,
            'gender'=> $request->gender,
            'party_id'=> $request->party_id,
            'state_id'=> $request->state_id,
        ]);
        return redirect('/candidate')->with('status', 'Candidate added');
    }

    public function updateCandidate(int $id){
        $candidate = Candidate::findOrfail($id);
        $states= State::all();
        $parties = Party::all();
        return view('candidates.candidateEdit',['states'=>$states,'parties'=>$parties,'candidate'=>$candidate]);
    }

    public function update(Request $req, int $id){
        $req->validate([
            'name_candidate' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
        ]);
        Candidate::findOrfail($id)->update($req->all());
        return redirect('/candidate')->with('status', 'Candidate updated');
    }
    public function deleteCandidate(int $id){
        $candidate = Candidate::findOrfail($id);
        $candidate->delete();
        return redirect('/candidate')->with('status', 'Candidate deleted');
    }
    //
}
