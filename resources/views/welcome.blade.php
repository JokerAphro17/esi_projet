@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-4">
        <div id="btn" class="bg-primary">
            <h2>LISTE DES ETUDIANTS</h2>
        </div>
    </div>
</div>
<div class="card-body table-responsive p-0" id="list" style="height: 500px;">
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
                    @if(auth()->user()->role_id)
                    <a href="{{ route('etudiant.edit', $etudiant->id) }}">
                        <i class="fas fa-edit  " style="font-size: 35px"></i>
                    </a>
                    <span id="deleteStudent" class="deleteStudent m-3 text-danger" style="cursor: pointer;"
                        data-id="{{ $etudiant->id }}">
                        <i class="fas fa-trash-alt" style="font-size: 35px"></i>
                    </span>
                    @endif
                    <a href="{{ route('etudiant.show', $etudiant->id) }}">
                        <i class="fa-solid fa-id-card-clip" alt="supprimer" style="font-size: 35px"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection