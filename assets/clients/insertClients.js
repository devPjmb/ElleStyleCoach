$(function () {
    $(
        "#ebookForm input,#ebookForm button"
    ).jqBootstrapValidation({
        preventSubmit: true,
        submitError: function ($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function ($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#nameEbook").val();
            var email = $("input#emailEbook").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(" ") >= 0) {
                firstName = name.split(" ").slice(0, -1).join(" ");
            }
            $this = $("#insertClientButton");
            $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
            $.ajax({
                url: "/assets/clients/insertClients.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                },
                cache: false,
                success: function () {
                    $.alert({
                        title: '¡Exito!',
                        content: 'En un momento me pondre en contacto con usted.',
                        type: 'green',
                        typeAnimated: true
                    });
                    $("#ebookForm").trigger("reset");
                },
                error: function () {
                    $.alert({
                        title: '¡Error!',
                        content: 'Ha ocurrido un error, vuelva a intentarlo en otro momento.',
                        type: 'red',
                        typeAnimated: true
                    });
                    $("#ebookForm").trigger("reset");
                },
                complete: function () {
                    setTimeout(function () {
                        $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
                    }, 1000);
                },
            });
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });

    $('a[data-toggle="tab"]').click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

/*When clicking on Full hide fail/success boxes */
$("#name").focus(function () {
    $("#success").html("");
});
