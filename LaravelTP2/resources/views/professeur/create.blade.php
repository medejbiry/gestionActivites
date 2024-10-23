@extends('base')

@section('main')
<div class="max-w-md mx-auto bg-white p-8 mt-10 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-center mb-6 text-blue-600">Ajouter un Professeur</h1>
    
    <form action="{{ route('professeur.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="nom" class="block text-sm font-medium text-gray-700">Nom :</label>
            <input type="text" id="nom" name="nom" required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="prenom" class="block text-sm font-medium text-gray-700">Prenom :</label>
            <input type="text" id="prenom" name="prenom" required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
            <input type="email" id="email" name="email" required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="flex justify-center">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Ajouter
            </button>
        </div>
    </form>
</div>
@endsection
