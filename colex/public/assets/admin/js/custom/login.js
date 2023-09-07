$(document).ready(function () {
    let t = $("#kt_sign_in_form");
    let e = $("#kt_sign_in_submit");
    let i = FormValidation.formValidation(t[0], {
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: "Username is required",
                    },
                },
            },
            password: {
                validators: {
                    notEmpty: {
                        message: "Password is required",
                    },
                },
            },
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: ".fv-row",
            }),
        },
    });

    e.click(function (n) {
        n.preventDefault(),
            i.validate().then(function (i) {
                if (i == "Valid") {
                    e.attr("data-kt-indicator", "on");
                    e.attr("disabled", "disabled");

                    let token = $('[name="_token"]').val();
                    let username = $("#username").val();
                    let password = $("#password").val();

                    $.ajax({
                        url: t.attr("action"),
                        type: "POST",
                        data: {
                            username: username,
                            password: password,
                        },
                        headers: {
                            "X-CSRF-TOKEN": token,
                        },
                        dataType: "json",
                        success: function (data) {
                            e.attr("data-kt-indicator", "");
                            e.removeAttr("disabled");

                            if (data.status) {
                                Swal.fire({
                                    text: data.message,
                                    icon: "success",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Oke",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                }).then(function (e) {
                                    if (e.isConfirmed) {
                                        location.href = t.attr(
                                            "data-kt-redirect-url"
                                        );
                                    }
                                });
                            } else {
                                Swal.fire({
                                    text: data.message,
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Coba Lagi",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                            }
                        },
                    });
                } else {
                    Swal.fire({
                        text: "Mohon berikan data yang benar!",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Coba Lagi",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
    });
});
