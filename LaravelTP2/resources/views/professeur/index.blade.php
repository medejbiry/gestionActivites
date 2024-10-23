@extends('base') 
@section('main')
    

  
  
  <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-blue-600">Liste des Professeurs</h1>
            <a href="{{ route('professeur.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter un professeur</a>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <ul class="divide-y divide-gray-200">
                @foreach ($professeurs as $professeur)
                    <li class="p-4 flex justify-between items-center">
                        <div>
                            <span class="text-lg font-semibold">{{ $professeur->nom }} {{ $professeur->prenom }}</span>
                            <span class="text-sm text-gray-500"> - {{ $professeur->Email }}</span>
                        </div>
                        <div class="space-x-2">
                            <a href="{{ route('professeur.edit', $professeur->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">Éditer</a>
                            <form action="{{ route('professeur.destroy', $professeur->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce professeur?')">Supprimer</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection