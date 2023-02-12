$(document).ready(function () {
    // Register form Password show hide feature
    $(".show-password, .hide-password").on('click', function () {
        var passwordId = 'register_password';
        if ($(this).hasClass('show-password')) {
            $("#" + passwordId).attr("type", "text");
            $(".show-password").attr('style', 'display:none !important');
            $(".hide-password").attr('style', 'display:block !important');
        } else {
            $("#" + passwordId).attr("type", "password");
            $(".hide-password").attr('style', 'display:none !important');
            $(".show-password").show();
        }
    });

    // Register form Submit Data
    $(".register-form").validate({
        rules: {
            register_firstName: {
                required: true,
            },
            register_email: {
                required: true,
                email: true
            },
            register_password: {
                required: true,
                minlength: 5
            }
        },
        // Specify validation error messages
        messages: {
            register_firstName: "Please provide a first name",
            register_email: "Please enter a valid email address",
            register_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            }
        },
        submitHandler: function (form) {
            $('.register_server_side_error').hide();
            $('.registerSubmitBtn').hide();
            $('.registerLoadingBtn').show();
            let data = $('.register-form').serialize();
            $.ajax({
                url: "/register",
                type: "post",
                data,
                success: function (response) {
                    try {
                        response = JSON.parse(response);
                        // console.log('response :: ',response.message);
                        if(!response.status){
                            $('.register_error_message').html(response.message);          
                            $('.register_server_side_error').show();
                            $('.registerLoadingBtn').hide();
                            $('.registerSubmitBtn').show();
                            return false;
                        }else{
                            $('.register_server_side_error').hide();
                            window.location.replace("/profile");
                        }
                    } catch (error) {
                        $('.register_error_message').html('Something Went Wrong Please Try Again.');          
                        $('.register_server_side_error').show();
                        $('.registerLoadingBtn').hide();
                        $('.registerSubmitBtn').show();
                    }
                },
                error: function (hxr, textStatus, errorThrown) {
                    if(hxr.status >= 500){
                        location.reload(true);
                    }else{
                        $('.register_error_message').html('Something Went Wrong Please Try Again.');          
                        $('.register_server_side_error').show();
                        $('.registerLoadingBtn').hide();
                        $('.registerSubmitBtn').show();
                    }
                }
            });
        }
    });

    // Login form Submit Data
    $(".login-form").validate({
        rules: {
            login_email: {
                required: true,
                email: true
            },
            login_password: {
                required: true,
                minlength: 5
            }
        },
        // Specify validation error messages
        messages: {
            login_email: "Please enter a valid email address",
            login_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
        },
        submitHandler: function (form) {
            $('.login_server_side_error').hide();
            $('.loginSubmitBtn').hide();
            $('.loginLoadingBtn').show();
            let data = $('.login-form').serialize();
            $.ajax({
                url: "/login",
                type: "post",
                data,
                success: function (response) {
                    try {
                        response = JSON.parse(response);
                        // console.log('response :: ',response.message);
                        if(!response.status){
                            $('.login_error_message').html(response.message);          
                            $('.login_server_side_error').show();
                            $('.loginLoadingBtn').hide();
                            $('.loginSubmitBtn').show();
                            return false;
                        }else{
                            $('.login_server_side_error').hide();
                            window.location.replace("/");
                        }
                    } catch (error) {
                        $('.login_error_message').html('Something Went Wrong Please Try Again.');          
                        $('.login_server_side_error').show();
                        $('.loginLoadingBtn').hide();
                        $('.loginSubmitBtn').show();
                    }
                },
                error: function (hxr, textStatus, errorThrown) {
                    if(hxr.status >= 500){
                        location.reload(true);
                    }else{
                        $('.login_error_message').html('Something Went Wrong Please Try Again.');          
                        $('.login_server_side_error').show();
                        $('.loginLoadingBtn').hide();
                        $('.loginSubmitBtn').show();
                    }
                }
            });
        }
    });
    
    // Reset Password
    $(".reset-password-form").validate({
        rules: {
            reset_password: {
                required: true,
                minlength: 5
            },
            reset_confirm_password: {
                required: true,
                minlength: 5,
                equalTo : '[name="reset_password"]'
            }
        },
        // Specify validation error messages
        messages: {
            reset_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            reset_confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Password and confirm password should be same."
            },
        },
        submitHandler: function (form) {
            $('.reset_server_side_error').hide();
            $('.resetSubmitBtn').hide();
            $('.resetLoadingBtn').show();
            $('.reset_server_side_success').hide();
            let url = $(location).attr('href');
            let urlKey = url.replace(/\/\s*$/, "").split('/').pop();
            let data = $('.reset-password-form').serialize()+"&token=" + urlKey;
            $.ajax({
                url: "/resetPassword",
                type: "post",
                data,
                success: function (response) {
                    try {
                        response = JSON.parse(response);
                        // console.log('response :: ',response.message);
                        if(!response.status){
                            $('.reset_error_message').html(response.message);          
                            $('.reset_server_side_error').show();
                            $('.resetLoadingBtn').hide();
                            $('.resetSubmitBtn').show();
                            $('.reset_server_side_success').hide();
                            return false;
                        }else{
                            $('.reset_server_side_success').show();
                            $('.reset_success_message').html(response.message);
                            $('.reset_server_side_error').hide();
                            $('.reset-password-form').hide();
                            $('.resetSubmitBtn').hide();
                            $('.resetLoadingBtn').hide();
                            // window.location.replace("/");
                        }
                    } catch (error) {
                        $('.reset_error_message').html('Something Went Wrong Please Try Again.');          
                        $('.reset_server_side_error').show();
                        $('.resetLoadingBtn').hide();
                        $('.resetSubmitBtn').show();
                        $('.reset_server_side_success').hide();
                    }
                },
                error: function (hxr, textStatus, errorThrown) {
                    if(hxr.status >= 500){
                        location.reload(true);
                    }else{
                        $('.reset_error_message').html('Something Went Wrong Please Try Again.');          
                        $('.reset_server_side_error').show();
                        $('.resetLoadingBtn').hide();
                        $('.resetSubmitBtn').show();
                        $('.reset_server_side_success').hide();
                    }
                }
            });
        }
    });

    // Forget Password Form 
    $(".forget-password-form").validate({
        rules: {
            forget_email: {
                required: true,
                email: true
            }
        },
        // Specify validation error messages
        messages: {
            forget_email: {
                required: "Please provide your regisered email",
                email: "Please enter a valid email address"
            },
        },
        submitHandler: function (form) {
            $('.forget_server_side_error').hide();
            $('.forgetSubmitBtn').hide();
            $('.forgetLoadingBtn').show();
            $('.forget_server_side_success').hide();
            let data = $('.forget-password-form').serialize();
            $.ajax({
                url: "/forgetPassword",
                type: "post",
                data,
                success: function (response) {
                    try {
                        response = JSON.parse(response);
                        // console.log('response :: ',response.message);
                        if(!response.status){
                            $('.forget_error_message').html(response.message);          
                            $('.forget_server_side_error').show();
                            $('.forgetLoadingBtn').hide();
                            $('.forgetSubmitBtn').show();
                            $('.forget_server_side_success').hide();
                            return false;
                        }else{
                            $('.forget_server_side_success').show();
                            $('.forget_success_message').html(response.message);
                            $('.forget-password-form').hide();
                            $('.forget_server_side_error').hide();
                            $('.forgetSubmitBtn').hide();
                            $('.forgetLoadingBtn').hide();
                        }
                    } catch (error) {
                        $('.forget_server_side_success').hide();
                        $('.forget_error_message').html('Something Went Wrong Please Try Again.');          
                        $('.forget_server_side_error').show();
                        $('.forgetLoadingBtn').hide();
                        $('.forgetSubmitBtn').show();
                    }
                },
                error: function (hxr, textStatus, errorThrown) {
                    if(hxr.status >= 500){
                        console.log(textStatus)
                        // location.reload(true);
                    }else{
                        $('.forget_server_side_success').hide();
                        $('.forget_error_message').html('Something Went Wrong Please Try Again.');          
                        $('.forget_server_side_error').show();
                        $('.forgetLoadingBtn').hide();
                        $('.forgetSubmitBtn').show();
                    }
                }
            });
        }
    });
    
    
});