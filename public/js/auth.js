(function () {
    $("#signupToggle").on("click", function () {
        $("#register-section").show();
        $("#login-section").hide();
        $("#emailpassword-reset").hide();
    });
    $("#loginToggle").on("click", function () {
        $("#register-section").hide();
        $("#login-section").show();
        $("#emailpassword-reset").hide();
    });

    $("#loginToggle1").on("click", function () {
        $("#register-section").hide();
        $("#login-section").show();
        $("#emailpassword-reset").hide();
    });

    $("#forgetPasswordToggle").on("click", function () {
        $("#register-section").hide();
        $("#login-section").hide();
        $("#emailpassword-reset").show();
    });

    $("#show-password").click(function () {
        var passwordField = $("#loginPassword");
        var passwordFieldType = passwordField.attr("type");
        if (passwordFieldType == "password") {
            passwordField.attr("type", "text");
            $(this).html('<i class="fa fa-eye-slash"></i>');
        } else {
            passwordField.attr("type", "password");
            $(this).html('<i class="fa fa-eye"></i>');
        }
    });

    $(".show-passwordRe").on("click", function () {
        var passwordField = $("#registerPassword");
        var passwordCField = $("#registerPasswordConfirmation");
        var passwordCType = passwordCField.attr("type");
        var passwordFieldType = passwordField.attr("type");
        if (passwordFieldType == "password") {
            passwordField.attr("type", "text");
            $(".show-passwordRe").html('<i class="fa fa-eye-slash"></i>');
        } else {
            passwordField.attr("type", "password");
            $(".show-passwordRe").html('<i class="fa fa-eye"></i>');
        }

        if (passwordCType == "password") {
            passwordCField.attr("type", "text");
            $(".show-passwordRe").html('<i class="fa fa-eye-slash"></i>');
        } else {
            passwordCField.attr("type", "password");
            $(".show-passwordRe").html('<i class="fa fa-eye"></i>');
        }
    });

    $("body").on("click", ".show-passwordReset", function () {
        var passwordField = $("#passwordRe");
        var passwordCField = $("#passwordConfirmationRe");
        var passwordCType = passwordCField.attr("type");
        var passwordFieldType = passwordField.attr("type");
        if (passwordFieldType == "password") {
            passwordField.attr("type", "text");
            $(".show-passwordRe").html('<i class="fa fa-eye-slash"></i>');
        } else {
            passwordField.attr("type", "password");
            $(".show-passwordRe").html('<i class="fa fa-eye"></i>');
        }

        if (passwordCType == "password") {
            passwordCField.attr("type", "text");
            $(".show-passwordRe").html('<i class="fa fa-eye-slash"></i>');
        } else {
            passwordCField.attr("type", "password");
            $(".show-passwordRe").html('<i class="fa fa-eye"></i>');
        }
    });

    let nameRe = $("#registerName"),
        phoneRe = $("#registerPhone"),
        emailRe = $("#registerEmail"),
        passwordRe = $("#registerPassword"),
        roleRe = $("#registerRole"),
        passwordConfirmationRe = $("#registerPasswordConfirmation");
    registerForm = $("#registerForm");

    registerForm.on("submit", function (event) {
        event.preventDefault();
        let $this = $(this),
            name = nameRe.val(),
            phone = phoneRe.val(),
            email = emailRe.val(),
            password = passwordRe.val(),
            password_confirmation = passwordConfirmationRe.val(),
            role = roleRe.val(),
            token = $this.find("input[name='_token']").val(),
            registerSubmit = $("#registerSubmit"),
            errors = [];
        registerSubmit.prop({ disabled: true });

        if (password !== password_confirmation) {
            errors.push("Password mismatch");
        }
        if (name == "" || name == null) {
            errors.push("Name is required");
        }
        if (email == "" || email == null) {
            errors.push("Name is required");
        }
        if (errors.length > 0) {
            p = "";
            $.each(errors, function (key, value) {
                p += "<p>"+value+"</p>"
            });
            showError(p, "#authfeedback");
        } else {
            let data = {
                name: name,
                phone: phone,
                email: email,
                password: password,
                password_confirmation: password_confirmation,
                role: role,
            };
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": token,
                },
            });
            console.log(data);

            $.ajax({
                method: "POST",
                url: "/register",
                data: data,
                success: function (params) {
                    console.log(params);
                    let result = JSON.parse(params);
                    if (result.status == "success") {
                        showSuccess(result.message, "#authfeedback");
                        $this.trigger('reset');
                        $("#register-section").hide();
                        $("#login-section").show();
                        $("#emailpassword-reset").hide();
                    } else {
                        showError(result.error, "#authfeedback");
                    }
                    registerSubmit.prop({ disabled: false });
                },
                error: function (error) {
                    console.error(error);
                    if (error.status == 422) {
                        var errors = "";
                        $.each(
                            error.responseJSON.errors,
                            function (key, value) {
                                errors += value + "!";
                            }
                        );
                        showError(errors, "#authfeedback");
                    } else {
                        showError("Error occurred during processing",'#authfeedback');
                    }
                    registerSubmit.prop({ disabled: false });
                },
            });
        }
    });

    let emailLo = $("#loginEmail"),
        passwordLo = $("#loginPassword"),
        loginForm = $("#loginForm");
    // loginForm.on("submit", function (event) {
    //     event.preventDefault();
    //     let $this = $(this),
    //         email = emailLo.val(),
    //         password = passwordLo.val(),
    //         token = $this.find("input[name='_token']").val(),
    //         loginUser = $("#loginUser");
    //     loginUser.prop({ disabled: true }),errors = [];
    //     if (email == "" || email == null) {
    //         errors.push("Email is required");
    //     }
    //     if (password == "" || password == null) {
    //         errors.push("Password is required");
    //     }
    //     if (errors.length > 0 ) {
    //         let p = "";
    //         $.each(errors, function (key, value) {
    //             p += "<p>"+value+"</p>"
    //         });
    //         showError(p, "#authfeedback");
    //     }else{
    //         let data = {
    //             email: email,
    //             password: password,
    //         };
    //         $.ajaxSetup({
    //             headers: {
    //                 "X-CSRF-TOKEN": token,
    //             },
    //         });
    //         $.ajax({
    //             type: "POST",
    //             url: "login",
    //             data: data,
    //             success: function (params) {
    //                 console.log(params);
    //                 let result = JSON.parse(params);
    //                 if (result.status == "success") {
    //                     showSuccess(result.success);
    //                     window.setTimeout(function () {
    //                         window.location.href = result.url;
    //                     }, 7000);
    //                 } else {
    //                     showError(result.error);
    //                 }
    //                 loginUser.prop({ disabled: false });
    //             },
    //             error: function (error) {
    //                 console.log(error);
    //                 if (error.status == 422) {
    //                     var errors = "";
    //                     $.each(
    //                         error.responseJSON.errors,
    //                         function (key, value) {
    //                             errors += value + "!";
    //                         }
    //                     );
    //                     showError(errors);
    //                 } else {
    //                     showError("Error occurred during processing");
    //                 }
    //                 loginUser.prop({ disabled: false });
    //             },
    //         });
    //     }
    // });

    $("#passwordResetForm").on("submit", function (event) {
        event.preventDefault();
        let email = $("#emailForget").val(),
            $this = $(this),
            token = $this.find("input[name='_token']").val(),
            submitEmail = $("#submitEmail");
        submitEmail.prop({ disabled: true });
        if (email !== "" && email !== null) {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": token,
                },
            });
            $.ajax({
                type: "POST",
                url: "/forgot-password",
                data: { email: email },
                success: function (params) {
                    console.log(params);
                    let result = JSON.parse(params);
                    if (result.status == "success") {
                        showSuccess(result.message, "#authfeedback");
                    } else {
                        showError(result.error, "#authfeedback");
                    }
                    submitEmail.prop({ disabled: false });
                },
                error: function (error) {
                    console.log(error);
                    if (error.status == 422) {
                        var errors = "";
                        $.each(
                            error.responseJSON.errors,
                            function (key, value) {
                                errors += value + "!";
                            }
                        );
                        showError(errors, "#authfeedback");
                    } else {
                        showError(
                            "Error occurred during processing",
                            "#authfeedback"
                        );
                    }
                    submitEmail.prop({ disabled: false });

                    $this.find("#loginUser").prop({ disabled: false });
                },
            });
        } else {
            showError("Email address is required");
        }
    });

    $("#passwordSetForm").on("submit", function (event) {
        event.preventDefault();
        console.log("there");
        let $this = $(this),
            passwordRE = $("#passwordRe").val(),
            passwordConfirmationRe = $("#passwordConfirmationRe").val(),
            token = $this.find("input[name='_token']").val(),
            submitReset = $("#submitReset");
        submitReset.prop({ disabled: true });
        if (passwordRE !== passwordConfirmationRe) {
            showError("Password mismatch. Please check and retry");
        } else {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": token,
                },
            });
            $.ajax({
                type: "POST",
                url: "/password-store",
                data: {
                    password: passwordRE,
                    password_confirmation: passwordConfirmationRe,
                },
                success: function (params) {
                    console.log(params);
                    let result = JSON.parse(params);
                    if (result.status == "success") {
                        showSuccess(result.message, "#authfeedback");
                    } else {
                        showError(result.error, "#authfeedback");
                    }
                    submitReset.prop({ disabled: false });
                    window.setTimeout(function () {
                        window.location.href = "login";
                    }, 7000);
                },
                error: function (error) {
                    console.log(error);
                    if (error.status == 422) {
                        var errors = "";
                        $.each(
                            error.responseJSON.errors,
                            function (key, value) {
                                errors += value + "!";
                            }
                        );
                        showError(errors, "#authfeedback");
                    } else {
                        showError("Error occurred during processing",'#authfeedback');
                    }
                    submitReset.prop({ disabled: false });
                },
            });
        }
    });

    function showSuccess(message, target) {
        iziToast.success({
            title: "OK",
            message: message,
            position: "center",
            timeout: 7000,
            target: target,
        });
    }

    function showError(message,target) {
        iziToast.error({
            title: "Error",
            message: message,
            position: "center",
            timeout: 7000,
            target: target,
        });
    }
})();
