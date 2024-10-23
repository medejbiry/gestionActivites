<p>{{ $etudiant->fullname }}</p>
<p>{{ $etudiant->email }}</p>
<p>{{ $etudiant->age }}</p>
<p>{{ $etudiant->filiere }}</p>
<a href="{{ route('etudiants.edit', $etudiant) }}">update</a>
<a href="{{ route('etudiants.index')}}">Back</a>
