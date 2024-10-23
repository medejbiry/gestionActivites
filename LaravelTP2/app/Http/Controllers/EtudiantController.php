<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $etudiants = Etudiant::all();
        return view('etudiants.index',compact('etudiants'));
    }
    public function show(Etudiant $etudiant){
        return view('etudiants.show',compact('etudiant'));
    }
    public function create(){
        return view('etudiants.create');
    }
    public function store( Request $request){
        Etudiant::create($request->all());
        return redirect()->route('etudiants.index');
    }
    public function edit(Etudiant $etudiant){
        return view('etudiants.edit',compact('etudiant'));
    }
    public function update(Etudiant $etudiant ,Request $request){
        $etudiant->update($request->all());
        return redirect()->route('etudiants.index');

    }
    public function destroy(Etudiant $etudiant){
        $etudiant->delete();
        return redirect()->route('etudiants.index');
    }
}
