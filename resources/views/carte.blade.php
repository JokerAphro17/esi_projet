@extends("layouts.master")
@section("content")
<div class="carte m-5 p-3" id="carte">
    <div class="row bg-success">
        <div class="col-md-10 text-center  offset-1">
            <p>CARTE &nbsp &nbsp D'ETUDIANT &nbsp &nbsp UNB/ESI</p>
        </div>
    </div>
    <div class="row        
    ">
        <div class="col-md-5 photo">
            <img src="{{asset('storage/images/etudiants/'.$etudiant->photo)}}" alt="" width='100%'>
        </div>
        <div class="col-md-6 offset-1">
            <div class="row">
                <div class="col-md-12  ">
                    <p class="fw-bold ">Matricule :
                        {{$etudiant->matricule}}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <p>Nom : <span class="fw-bold ">
                            {{$etudiant->nom}}
                        </span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <p>Prenom :<sapn class="fw-bold ">
                            {{$etudiant->prenom}}
                        </sapn>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <p>Cycle :<sapn class="fw-bold ">
                            {{$etudiant->cycle}}
                        </sapn>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <p>Filiere : <sapn class="fw-bold "> INFORMAIQUE</sapn>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <p>Niveau : <sapn class="fw-bold ">
                            {{$etudiant->niveau}}
                        </sapn>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <p>Année : <sapn class="fw-bold ">
                            {{$etudiant->annee}}
                        </sapn>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="btn-pdf" class="btn btn-primary">
    <i class="fa-solid fa-file-pdf"></i>
    IMPRIMER
</div>

@endsection