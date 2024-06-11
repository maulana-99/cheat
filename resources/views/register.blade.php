<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="register-box">
            <h2>Register</h2>
            @include('component.error')
            <form action="" method="post">
                @csrf
                <div class="input-box">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-box">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <div class="input-box">
                    <div class="captcha">
                        <span id="captcha-img">{!! captcha_img() !!}</span>
                        <button type="button" class="reload-btn" id="reload">&#x21bb;</button>
                    </div>
                    <input type="text" id="captcha" name="captcha" placeholder="Enter Captcha" required>
                </div>
                <div class="button-box">
                    <button type="submit">Register</button>
                </div>
                <p class="login">Have account <a href="{{ url('/login') }}"> Login</a></p>

            </form>
        </div>
    </div>

    <script>
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: '{{ url('reload-captcha') }}',
                success: function(data) {
                    $('#captcha-img').html(data.captcha);
                }
            });
        });
    </script>
</body>

</html>
