require("./bootstrap");
require("./sweetalert.min");
import "admin-lte/plugins/jquery/jquery.min";
import "admin-lte/plugins/bootstrap/js/bootstrap.bundle.min";
import "admin-lte/dist/js/adminlte.min";
import "admin-lte/plugins/datatables/jquery.dataTables.js";
import jspdf from "jspdf";

import swal from "sweetalert";

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
var carte = document.getElementById("carte");
$(document).ready(function () {
    $("#btn-pdf").click(function () {
        var doc = new jspdf("l", "px", "a4");
        doc.html(carte, {
            callback: function (doc) {
                doc.save("carte.pdf");
            },
        }).then(function () {
            swal("Carte créée avec succès", "", "success");
        });
        let id = document.getElementById("id").value;
        $.ajax({
            url: ` http://localhost:8000/carte/${id}`,
            type: "GET",
            success: function (data) {
                swal("Mail e envoyé avec a l'etudiant", "", "success");
            },
            error: function (error) {
                swal("Un probleme avec le serveur de messagerie ", "", "error");
            },
        });
    });
});
