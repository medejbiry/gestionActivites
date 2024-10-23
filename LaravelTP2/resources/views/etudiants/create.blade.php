<form action="{{route('etudiants.store')}}" method="POST">@csrf
    <div class="form-group">
        <label for="fullname">Full name :</label>
        <input type="text" name="fullname" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="age">Age :</label>
        <input type="text" name="age" id="" class="form-control">
    </div> 
    <div class="form-group">
        <label for="email">Email :</label>
        <input type="text" name="email" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="filiere">Filiere :</label>
        <input type="text" name="filiere" id="" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary-outline"> Add etudiant</button>

</form>