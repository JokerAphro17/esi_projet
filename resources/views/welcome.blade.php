@extends('layouts.master')
@section('content')

<div class="row justify-content-evenly">
    <div class="col-md-6">

    </div>
    <div class="col-md-6">
        <div id="btn" class="btn btn-primary float-right">LISTE DES ETUDIANTS</div>
    </div>
</div>
<div class="card-body table-responsive p-0 d-none" id="list" style="height: 500px;">
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
            @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{
                    $etudiant->matricule
                    }}</td>
                <td>{{
                    $etudiant->nom
                    }}</td>
                <td>{{
                    $etudiant->prenom
                    }}</td>
                <td>{{
                    $etudiant->cycle
                    }}</td>
                <td>{{
                    $etudiant->niveau
                    }}</td>
                <td>{{
                    $etudiant->annee
                    }}</td>
                <td class="text-center">
                    <a href="{{ route('etudiant.edit', $etudiant->id) }}">
                        <i class="fas fa-edit  " style="font-size: 35px"></i>
                    </a>
                    <span id="deleteStudent" class="deleteStudent m-3 text-danger" style="cursor: pointer;"
                        data-id="{{ $etudiant->id }}">
                        <i class="fas fa-trash-alt" style="font-size: 35px"></i>
                    </span>
                    <a href="{{ route('etudiant.show', $etudiant->id) }}">
                        <i class="fa-solid fa-id-card-clip" alt="supprimer" style="font-size: 35px"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="card-body" id="form" class="row justify-content-center">
    <form enctype="multipart/form-data" action="{{route('etudiant.store')}}" method="POST"
        class="p-5 form col-6 offset-3 ">
        @csrf
        <h2 id="title">FORMULAIRE D'INSCRIPTION</h2>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="form-group">
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="cycle" value="Licence" readonly name="cycle"
                placeholder="Cycle">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="niveau" value="L1" readonly name="niveau" placeholder="Niveau">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="annee_academique" name="annee" placeholder="Annee Accademique">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" id="file" name="file" placeholder="Photo">
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
    </form>
</div>
@endsection