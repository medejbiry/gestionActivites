@extends('base')
@section('main')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-blue-600">Liste des Etudiants</h1>
        <a href="{{ route('etudiants.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter un etudiants</a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">

        @foreach ($etudiants as $etudiant)
            <p>{{ $etudiant->fullname }}</p>
            <a href="{{ route('etudiants.show', $etudiant) }}">Expand</a>
            <form action="{{ route('etudiants.destroy', $etudiant) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    </div>
</div>
@endsection
