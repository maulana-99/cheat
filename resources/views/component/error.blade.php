<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .error-messages {
            border: 1px solid #e74c3c;
            background-color: #f9d6d5;
            color: #e74c3c;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .error-messages ul {
            list-style-type: none;
            padding-left: 0;
        }

        .error-messages li {
            margin: 5px 0;
        }

        .error-messages li::before {
            margin-right: 5px;
        }

        @media (max-width: 600px) {
            .error-messages {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>
