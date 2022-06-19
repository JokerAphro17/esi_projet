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
let element = document.getElementById("carte");
$(document).ready(function () {
    $("#btn-pdf").click(function () {
        var doc = new jspdf();
        doc.html(element);
});
