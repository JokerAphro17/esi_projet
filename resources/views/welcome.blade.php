@extends('layouts.master')
@section('content')
<<<<<<< HEAD
<div class="row justify-content-evenly">
    <div class="col-md-6">
        <h2 id="title">FORMULAIRE D'INSCRIPTION</h2>
    </div>
    <div class="col-md-6">
        <div id="btn" class="btn btn-primary float-right">AJOUTER UN ETUDIANT</div>
    </div>
</div>

<div class="card-body table-responsive p-3 d-none" id="list" style="height: 500px;">
    <table class="table table-head-fixed text-nowrap" id="myTable">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Cycle</th>
                <th>Niveau</th>
                <th>Annee Accademique</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>45EHDH</td>
                <td>BOUKHARI</td>
                <td>Abdou</td>
                <td>Licence</td>
                <td>L1</td>
                <td>2019-2020</td>
                <td>
                    {{-- <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('etudiant.destroy', $etudiant->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form> --}}
                </td>

            </tr>

        </tbody>
    </table>
</div>

<div class="card-body" id="form" class="row justify-content-center">
    <form action="route('etudiant.store')" method="POST" class=" col-6 offset-3">
        @csrf
        <div class="form-group">
            <label for="matricule">Matricule</label>
            <input type="text" class="form-control" id="matricule" name="matricule" placeholder="Matricule">
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
        </div>
        <div class="form-group">
            <label for="cycle">Cycle</label>
            <input type="text" class="form-control" id="cycle" name="cycle" placeholder="Cycle">
        </div>
        <div class="form-group">
            <label for="niveau">Niveau</label>
            <input type="text" class="form-control" id="niveau" name="niveau" placeholder="Niveau">
        </div>
        <div class="form-group">
            <label for="annee_academique">Annee Accademique</label>
            <input type="text" class="form-control" id="annee_academique" name="annee_academique"
                placeholder="Annee Accademique">
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
    </form>
</div>
=======
coucou
>>>>>>> deb4ba63c7c48ae4009c8243cb010c143c934441

@endsection