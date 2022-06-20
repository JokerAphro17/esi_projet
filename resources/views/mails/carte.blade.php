<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <h1>Carte disponible</h1>
    <p>Bonjour chere {{$user['nom']}} {{$user['prenom']}} votre carte est disponible vous pouvez passé su lundi au
        vendredi
        de 9h à 17h pour la
        recuperer</p>
    <p>Votre Matricul est :<strong> {{$user['matricule']}}</strong></p>

    <p>Bonne journée</p>
    <p>L'equipe ESI</p>
</body>

</html>