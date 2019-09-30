<!DOCTYPE html>
<html lang="en">
    <head>
        <title>:: CAKI :: Login</title>
        
        <!-- add the responsive viewport meta tag -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="description" content="CAKI Bootstrap beta Design 1.0.0">
        <meta name="author" content="CAKI, Caki Indonesia">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <style type="text/css">
            .slide-form{
            position: absolute;
            width: 968px;
            height: 768px;
            left: 398px;
            top: 0px;

            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-image: url(images/bg/bg1.jpg);
            transition: 1.5s linear;
            -moz-transition: 1.5s linear;
            }
            .caki-login{
            position: absolute;
            width: 398px;
            height: 768px;
            left: 0px;
            top: 0px;

            background: #D17905;
            }
            .signing{
            position: absolute;
            width: 382px;
            height: 399px;
            left: 129px;
            top: 278px;
            padding: 24px;

            background: #FFFFFF;
            }

        </style>
        <script type="text/javascript">
            $(document).ready(function(){
            var bg=[0,1,2,3,4,5,6,7];
            var index=0;
            setInterval(function(){
            index=(index + 1) % bg.length;
            $('.slide-form').css('background-image','url("images/bg/bg'+index+'.jpg")');
            },3000);
            });
        </script>
    </head>
    <body>
        
        <div class="container-fluid">
            <div class="slide-form"></div>
            <div class="caki-login">
                <div style="position: absolute; width: 108px; height: 108px; left: 135px; top: 97px;">
                    <img src="{{ asset('images/logo.png') }}" class="rounded-circle img-thumbnail" alt="Caki Logo">
                </div>
                <div class="signing img-thumbnail">           
                    <p class="lead">Login to your account</p>
                            <hr>
                            @if(\Session::has('alert'))
                                <div class="alert alert-danger">
                                    <div>{{Session::get('alert')}}</div>
                                </div>
                            @endif
                            @if(\Session::has('alert-success'))
                                <div class="alert alert-success">
                                    <div>{{Session::get('alert-success')}}</div>
                                </div>
                            @endif
                    <form action="{{ url('/loginPost') }}" method="post" class="needs-validation" novalidate>
                    {{ csrf_field() }}
                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" id="name" placeholder="Enter username" name="name" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <br>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" required> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <br>
                    <div class="text-center">
                        <a href="#lock" class="text-decoration-none"><i class="fas fa-lock" style="color:#5f5f5f"></i> Forgot password?</a>
                        <br>
                        <p>Don't have an account? <a href="#regist" class="text-decoration-none"> Register </a></p>
                    </div>
                </div>
            </div>
        </div>


        <script>
        // Disable form submissions if there are invalid fields
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
        </script>
    </body>
</html>
