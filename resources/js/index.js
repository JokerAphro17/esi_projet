$("#btn").click(function () {
    $("#list").toggleClass("d-none");
    if ($("#list").hasClass("d-none")) {
        $("#btn").text("LISTER LES ETUDIANTS");
        $("#title").text("FORMULAIRE D'ENREGISTREMENT");
    } else {
        $("#btn").text("AJOUTER UN ETUDIANT");
        $("#title").text("LISTE DES ETUDIANTS");
    }
    $("#form").toggleClass("d-none");
});
