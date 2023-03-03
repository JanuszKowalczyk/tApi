$(document).on("click", "#search", function () {
    let error = 0;
    let krs = $("#krs").val();
    // let registry0 = ($("#registry-0").is(":checked")) ? 1 : 0;
    // let registry1 = ($("#registry-1").is(":checked")) ? 1 : 0;
    // let registry0 = $("#registry-0").val();
    let registry1 = $("#registry-1").val();
    let registry;

    // validation
    // if (krs.length < 10) $("#krsError").slideDown();
    if (krs.length < 10) {
        $("#krsError").slideDown();
        $("#krs").addClass("is-invalid");
        return;
    }

    if (0 === error) {
        // ajax
        $.post("/krsApi/ajax/api.php", {
            'krs': krs,
            // 'registry-0': registry0,
            'registry-1': registry1
        }).done(function (data) {
            $("#response").html(data);
        }).fail(function () {
            // alert
        });
    }
});



