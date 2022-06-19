@extends("layouts.master")
@section("content")
<div class="carte m-5 p-3" id="carte">
    <div class="row bg-success">
        <div class="col-md-10 text-center  offset-1">
            <h1>CARTE D'ETUDIANT UNB/ESI</h1>
        </div>
    </div>
    <div class="row        
    ">
        <div class="col-md-5 photo">
            <img src="{{
                $etudiant->photo
            }}" alt="carte" class="img-fluid">
        </div>
        <div class="col-md-6 offset-1">
            <div class="row">
                <div class="col-md-12 m-2 ">
                    <h3 class="fw-bold ">Matricule :
                        {{$etudiant->matricule}}
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Nom : <span class="fw-bold ">
                            {{$etudiant->nom}}
                        </span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Prenom :<sapn class="fw-bold ">
                            {{$etudiant->prenom}}
                        </sapn>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Cycle :<sapn class="fw-bold ">
                            {{$etudiant->cycle}}
                        </sapn>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Filiere : <sapn class="fw-bold "> INFORMAIQUE</sapn>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Niveau : <sapn class="fw-bold ">
                            {{$etudiant->niveau}}
                        </sapn>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-2">
                    <h3>Année : <sapn class="fw-bold ">
                            {{$etudiant->annee}}
                        </sapn>
                    </h3>
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