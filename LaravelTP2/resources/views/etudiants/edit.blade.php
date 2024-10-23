

<form action="{{route('etudiants.update',$etudiant)}}" method="POST">@csrf
    @method("PUT")
    <div class="form-group">
        <label for="fullname">Full name :</label>
        <input type="text" name="fullname" id="" value="{{$etudiant->fullname}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="age">Age :</label>
        <input type="text" name="age" id="" value="{{$etudiant->age}}" class="form-control">
    </div> 
    <div class="form-group">
        <label for="email">Email :</label>
        <input type="text" name="email" id="" value="{{$etudiant->email}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="filiere">Filiere :</label>
        <input type="text" name="filiere" id="" value="{{$etudiant->filiere}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary-outline">  Update</button>

</form>