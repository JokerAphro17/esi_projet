@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div id="btn1" class="btn btn-primary ">LISTE DES SECRETAIRE</div>
    </div>
</div>
<div class="card-body table-responsive p-3 d-none" id="list1" style="height: 500px;">
    <table class="table table-head-fixed text-nowrap" id="myTable1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{
                    $user->name
                    }}</td>
                <td>
                    {{
                    $user->email
                    }}</td>
                <td> {{$user->role_id ? 'Administrateur': 'Secretaire'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="card-body" id="form1" class="row justify-content-center">
    <form action="{{route('secretaire.store')}}" method="POST" class="p-5 form col-6 offset-3 ">
        @csrf
        <h2 class="text-center">FORMULAIRE D'INSCRIPTION</h2>

        <div class="form-group">
            <input type="text" class="form-control" id="nom" name="name" placeholder="Nom">
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
        <div class="form-group col-md-12 justify-content-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>

@endsection