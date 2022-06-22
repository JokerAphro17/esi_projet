@extends('layouts.master')
@section('content')
<div class="card-body" id="form" class="row justify-content-center">
    <form enctype="multipart/form-data" action="{{route('etudiant.store')}}" method="POST"
        class="p-5 form col-6 offset-3">
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