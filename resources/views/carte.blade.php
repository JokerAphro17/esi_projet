@extends("layouts.master")
@section("content")
<div class="carte m-5 p-3">
    <div class="row">
        <div class="col-md-10 text-center offset-1">
            <h1>CARTE D'ETUDIANT UNB/ESI</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 photo">
            <img src="{{asset('photo.jpg')}}" alt="carte" class="img-fluid">
        </div>
        <div class="col-md-6 offset-1">
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Matricule : E5458420199</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Nom : ILBOUDO</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Prenom : SOULEYMANE</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Cycle : Licence</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Filiere : Informatique</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Niveau : L1</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Année : 2019-2020</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection