@extends("layouts.master")
@section("content")
<div class="conte">
    <div class="carte m-5 p-2 " id="carte">
        <div class="row bg-success ">
            <div class="col-md-10 text-center  offset-1">
                <h3>CARTE D'ETUDIANT &nbsp &nbsp UNB/ESI</h3>
            </div>
        </div>
        <div class="row infos">
            <div class="col-md-4 photo">
                <img src="{{asset('storage/images/etudiants/'.$etudiant->photo)}}" alt="" width='100%'>
            </div>
            <div class="col-md-6 ms-3">
                <div class="row">
                    <div class="col-md-12">
                        <p class="fw-bold ">Matricule :
                            {{$etudiant->matricule}}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <p>Nom : <span class="fw-bold ">
                                {{$etudiant->nom}}
                            </span class="gauche">
                            <span class="gauche">
                                Prenom :<sapn class="fw-bold ">
                                    {{$etudiant->prenom}}
                                </sapn>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <p>Cycle :<sapn class="fw-bold ">
                                {{$etudiant->cycle}}
                            </sapn>
                            <span class="gauche"> Filiere : <sapn>INFO</sapn>
                            </span>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <p>Niveau : <sapn class="fw-bold ">
                                {{$etudiant->niveau}}
                            </sapn>

                            <span class="gauche"> Année : <sapn class=" ">
                                    {{$etudiant->annee}}</span>
                            </sapn>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-warning  ">
            <div class="col-md-12 text-center ">
                <h3>ECOLE &nbsp &nbsp SUPERIEUR &nbsp &nbsp D'INFORMATIQUE</h3>
            </div>
        </div>
    </div>
    <div id="btn-pdf" class="btn btn-primary" style="cursor:pointer">
        <i class="fa-solid fa-file-pdf"></i>
        IMPRIMER
    </div>
</div>

<input id="id" type="hidden" value="{{$etudiant->id}}">
@endsection