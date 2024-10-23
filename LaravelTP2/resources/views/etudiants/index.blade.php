@extends('base')
@section('main')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-blue-600">Liste des Etudiants</h1>
        <a href="{{ route('etudiants.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter un etudiants</a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <ul class="divide-y divide-gray-200">
        @foreach ($etudiants as $etudiant)
        <li class="p-4 flex justify-between items-center">
            <div>
                <span class="text-lg font-semibold">{{ $etudiant->fullname}}</span>
            </div>
            <div class="space-x-2">
                <a href="{{ route('etudiants.edit', $etudiant->id) }}"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">Éditer</a>
                <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce etudiant?')">Supprimer</button>
                </form>
            </div>
        </li>
        @endforeach
    </div>
</div>
@endsection
