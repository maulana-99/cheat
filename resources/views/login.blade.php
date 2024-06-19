<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Login</title>
</head>

<body>
@include('component.navbar')
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            @include('component.error')
            <form action="" method="post">
                @csrf
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                {{-- <div class="input-box">
                    <div class="captcha">
                        <span id="captcha-img">{!! captcha_img() !!}</span>
                        <button type="button" class="reload-btn" id="reload">&#x21bb;</button>
                    </div>
                    <input type="text" id="captcha" name="captcha" placeholder="Enter Captcha" required>
                </div> --}}
                <div class="button-box">
                    <button type="submit">Login</button>
                </div>
                <p class="regis">Make account <a href="{{ url('/register') }}"> Register</a></p>
            </form>
        </div>
    </div>

    {{-- <script>
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: '{{ url("reload-captcha") }}',
                success: function(data) {
                    $('#captcha-img').html(data.captcha);
                }
            });
        });
    </script> --}}
</body>

</html>
