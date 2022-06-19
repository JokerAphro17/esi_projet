require("./bootstrap");
import "admin-lte/plugins/jquery/jquery.min";
import "admin-lte/plugins/bootstrap/js/bootstrap.bundle.min";
import "admin-lte/dist/js/adminlte.min";
import "admin-lte/plugins/datatables/jquery.dataTables.js";
import jspdf from "jspdf";
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
$("#btn1").click(function () {
    $("#list1").toggleClass("d-none");
    if ($("#list1").hasClass("d-none")) {
        $("#btn1").text("LISTER LES SECRETAIRE");
        $("#title2").text("");
    } else {
        $("#btn1").text("AJOUTER UN SECRETAIRE");
        $("#title2").text("LISTE DES SECRETAIRES");
    }
    $("#form1").toggleClass("d-none");
});
$(document).ready(function () {
    $("#btn-pdf").click(function () {
        var doc = new jspdf();
        // create a identity card
        doc.setFontSize(20);

        doc.setPageSize([, 210]);
        doc.setTextColor(0, 0, 0);
        doc.text(20, 20, "IDENTITE");
        doc.setFontSize(15);
        doc.setTextColor(0, 0, 0);
        doc.text(20, 30, "Nom : " + $("#nom").val());
        doc.text(20, 40, "Prenom : " + $("#prenom").val());
        doc.text(20, 50, "Date de naissance : " + $("#date").val());
        doc.text(20, 60, "Adresse : " + $("#adresse").val());
        doc.text(20, 70, "Email : " + $("#email").val());
        doc.text(20, 80, "Telephone : " + $("#telephone").val());
        doc.save("identite.pdf");
    });
});
