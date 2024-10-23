
@extends('base')
@section('main')

<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto">
        <h1 class="text-2xl font-bold text-center mb-6 text-blue-600">Modifier un Etudiant</h1>
        <form action="{{ route('etudiants.update', $etudiant) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="fullname" class="block text-sm font-medium text-gray-700">FullName :</label>
                <input type="text" name="fullname" value="{{ $etudiant->fullname }}" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-700">Age :</label>
                <input type="text" name="age" value="{{ $etudiant->age }}" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
                <input type="email" name="email" value="{{ $etudiant->email }}" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
                <input type="text" name="filiere" value="{{ $etudiant->filiere }}" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Modifier
                </button>
            </div>
        </form>
    </div>
@endsection


