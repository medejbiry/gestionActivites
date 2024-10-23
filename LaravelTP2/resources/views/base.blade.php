<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="flex bg-black justify-between items-center px-4 py-6">
        <h1 class="text-3xl font-bold text-blue-600">Gestion Activitees</h1>
        <div class="w-2/4">
            <a href="{{ route('etudiants.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Etudiants</a>
        <a href="{{ route('professeur.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Professeur</a>
        </div>
    </div>

    @yield('main')
</body>

</html>
