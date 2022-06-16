@extends("layouts.master")
@section("content")
<div class="carte m-5 p-3">
    <div class="row bg-success">
        <div class="col-md-10 text-center  offset-1">
            <h1>CARTE D'ETUDIANT UNB/ESI</h1>
        </div>
    </div>
    <div class="row 
    " style="background: url('{{asset('logo.jpeg')}}');
             
    ">
        <div class="col-md-5 photo">
            <img src="{{asset('photo.jpg')}}" alt="carte" class="img-fluid">
        </div>
        <div class="col-md-6 offset-1">
            <div class="row">
                <div class="col-md-12 m-2 ">
                    <h3 class="fw-bold bg-secondary">Matricule : E5458420199</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Nom : <span class="fw-bold bg-secondary">ILBOUDO</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Prenom :<sapn class="fw-bold bg-secondary"> SOULEYMANE</sapn>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Cycle :<sapn class="fw-bold bg-secondary"> LICENCE</sapn>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Filiere : <sapn class="fw-bold bg-secondary"> INFORMAIQUE</sapn>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Niveau : <sapn class="fw-bold bg-secondary"> L1</sapn>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Année : <sapn class="fw-bold bg-secondary">2021-2022</sapn>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection