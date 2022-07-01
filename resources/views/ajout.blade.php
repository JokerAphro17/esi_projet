@extends('layouts.master')
@section('content')
<div class="card-body" id="form" class="row justify-content-center">
    <form enctype="multipart/form-data" action="{{route('etudiant.store')}}" method="POST"
        class="p-5 form col-6 offset-3">
        @csrf
        <h2 id="title">
            @if($etudiant ?? '')
            MODIFIER ETUDIANT
            @else
            AJOUTER ETUDIANT
            @endif
        </h2>
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
            <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiant->nom ?? ''}}"
                placeholder="Nom">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" required id="prenom" name="prenom"
                value="{{$etudiant->prenom ?? ''}}" placeholder="Prenom">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" value="{{$etudiant->email ?? ''}}"
                placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="cycle" value="Licence" readonly name="cycle"
                placeholder="Cycle">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="niveau" value="L1" readonly name="niveau" placeholder="Niveau">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" value="{{$etudiant->annee ?? ''}}" id="annee_academique"
                name="annee" placeholder="Annee Accademique">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" id="file" name="file" placeholder="Photo">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
            @if($etudiant ?? '')
            <div class="col-md-3">
                <a href="{{route('etudiant.index')}}" class="btn btn-danger">Annuler</a>
            </div>
            @endif
        </div>
    </form>
</div>

@endsection