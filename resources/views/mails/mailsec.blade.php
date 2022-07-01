<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="container">
        <h2>
            <strong>Bonjour {{$secretary->nom}}</strong>
            Voici vos differents information de connexion
        </h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <h3>{{$secretary->email}}</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <h3>{{$secretary->password}}</h3>
                </div>
            </div>
        </div>
</body>

</html>