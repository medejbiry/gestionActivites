<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    public function index()
    {
        $professeurs = Professeur::all();
        return view('professeur.index', compact('professeurs'));
    }


    public function create()
    {
        return view('professeur.create');
    }


    public function store(Request $request)
    {
        Professeur::create($request->all());
        return redirect()->route('professeur.index');
    }


    public function show(Professeur $professeur)
    {
        return view('professeur.show', compact('professeur'));
    }


    public function edit(Professeur $professeur)
    {
        return view('professeur.edit', compact('professeur'));
    }

    public function update(Request $request, Professeur $professeur)
    {

        $professeur->update($request->all());
        return redirect()->route('professeur.index');
    }

    public function destroy(Professeur $professeur)
    {
        $professeur->delete();
        return redirect()->route('professeur.index');
    }
}
