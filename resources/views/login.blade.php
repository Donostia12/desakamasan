<!doctype html>
<html lang="en">

<head>
    <title>Login Admin - Desa Kamasan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>

<body class="img js-fullheight" style="background-image: url({{ asset('assets/login/images/bg.jpg') }});">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login Admin - <span>Desa Kamasan</span></h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        @if (session('salah'))
                            <div class="alert alert-danger">
                                {{ session('salah') }}
                            </div>
                        @endif
                        @if (session('balik'))
                            <div class="alert alert-success">
                                <b>selamat</b> {{ session('balik') }}
                            </div>
                        @endif
                        <form action="actlogin" class="signin-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username"
                                    required>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" name="password" class="form-control"
                                    placeholder="Password" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <div class="captcha" style="margin-bottom: 5%">
                                    <span>{!! captcha_img('math') !!}</span>
                                    <button type="button" class="btn btn-secondary reload" id="reload">
                                        &#x21bb;
                                    </button>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="captcha" class="form-control" placeholder="Captcha"
                                        required>
                                </div>
                            </div>
                            @error('captcha')
                                <script>
                                    alert('Captcha tidak Valid!')
                                </script>
                            @enderror
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'reload',
                success: function(data) {
                    $('.captcha span').html(data.captcha);
                }
            })
        })
    </script>
    <script src="{{ asset('assets/login/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/popper.js') }}"></script>
    <script src="{{ asset('assets/login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/main.js') }}"></script>

</body>

</html>
