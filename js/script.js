// Add Record
function addRecord() {
    // get values
    var nombre = $("#nombre").val();
    var dia = $("#dia").val();
    var hora = $("#hora").val();
    var comentario = $("#comentario").val();

    // Add record
    $.post("ajax/addRecord.php", {
        nombre: nombre,
        dia: dia,
        hora: hora,
		comentario: comentario

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#nombre").val("");
        $("#dia").val("");
        $("#hora").val("");
        $("#comentario").val("");

    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}

function DeleteUser(id) {
    var conf = confirm("¿Está seguro, realmente desea eliminar el registro?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_nombre").val(user.nombre);
            $("#update_dia").val(user.dia);
            $("#update_hora").val(user.hora);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var idalumno = $("#update_nombre").val();
    var cve = $("#update_dia").val();
    var snombre = $("#update_hora").val();

    // get hidden field value
    var id = $("#hidden_user_nombre").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            nombre: nombre,
            dia: dia,
            hora: hora
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}


$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
    readMaterias();
});