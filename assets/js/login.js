
$('document').ready(function() {
    $('#uname').on('focus', function () {
        $('#uname').removeClass('error');
    });

    $('#uname').on('blur', function () {
        if ($('#uname').val() == '') {
            $('#uname').addClass('error');
        }
    });

    $('#password').on('focus', function () {
        $('#password').removeClass('error');
    });

    $('#password').on('blur', function () {
        if ($('#password').val() == '') {
            $('#password').addClass('error');
        }
    });

    $('#login-form').on('submit', function (e) {
            e.preventDefault();
            $('#err-msg').html('');
            var err = false;
            if ($('#uname').val() == '') {
                $('#uname').addClass('error');
                err = true;
            }
            if ($('#password').val() == '') {
                $('#password').addClass('error');
                $('#err-msg').html('<div class="alert alert-danger text-center">Input required</div>');

            }
            if (err == true) {
                return false;
            }
            
            $.ajax({
            type: 'POST',
            url: 'login.php',
            data: $('#login-form').serialize() + '&' + $('#login').attr('name') + '=' + $('#login').val(),
            success: function(status){
                if (status == "admin") {
                    $('#login').val('Signing in...');
                    setTimeout('window.location.href = "home.php";',1000);
                }
                else if (status == "poweruser") 
                {
                    $('#login').val('Signing in...');
                    setTimeout('window.location.href = "poweruser.php";',1000);
                } 

                else {
                    $('#err-msg').html('<div class="alert alert-danger text-center">Invalid username or password</div>');
                    $('#uname').val('');
                    $('#password').val('');
                }
            }
        });
    });
});
