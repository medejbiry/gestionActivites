@extends('base')
@section('main')
    <div class="max-w-md mx-auto bg-white p-8 mt-10 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-6 text-blue-600">Ajouter un Professeur</h1>

        <form action="{{ route('etudiants.store') }}" method="POST">@csrf
            <div class="mb-4">
                <label for="fullname" class="block text-sm font-medium text-gray-700">Full name :</label>
                <input type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
                    name="fullname" id="" class="form-control">
            </div>
            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-700">Age :</label>
                <input type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
                    name="age" id="" class="form-control">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
                <input type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
                    name="email" id="" class="form-control">
            </div>
            <div class="mb-4">
                <label for="filiere" class="block text-sm font-medium text-gray-700">Filiere :</label>
                <input type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
                    name="filiere" id="" class="form-control">
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
