<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="container">
        <h2>Voici vos differents information de connexion </h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <h3>{{$user['email']}}</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <h3>{{$user['password']}}</h3>
                </div>
            </div>
        </div>
</body>

</html>