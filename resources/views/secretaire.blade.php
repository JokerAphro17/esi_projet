@extends('layouts.master')
@section('content')

<div class="row justify-content-evenly">
    <div class="col-md-6">
        <h3 id="title2">FORMULAIRE D'INSCRIPTION D'UN SECRETAIRE</h3>
    </div>
    <div class="col-md-6">
        <div id="btn1" class="btn btn-primary float-right">LISTE DES SECRETAIRE</div>
    </div>
</div>
<div class="card-body table-responsive p-3 d-none" id="list1" style="height: 500px;">
    <table class="table table-head-fixed text-nowrap" id="myTable1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>BOUKHARI</td>
                <td>Abdou</td>
                <td>
                    {{-- <a href="mailto: --}}
                    {{-- {{ $secretaire->email }}">{{ $secretaire->email }}</a> --}}
                </td>
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
<div class="card-body" id="form1" class="row justify-content-center">
    <form action="route('secretaire.store')" method="POST" class="p-5 form col-6 offset-3 ">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                placeholder="Confirm Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
        @endsection