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
    <p>Bonjour cher(e) {{$stud->nom." ".$stud->prenom}} votre carte est disponible vous pouvez passer du lundi au
        vendredi
        de 9h à 17h pour la
        recuperer</p>
    <p>Votre Matricule est :<strong> {{$stud->matricule}}</strong></p>
</body>

</html>