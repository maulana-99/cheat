<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .btn-nav-room {
            display: flex;
            gap: 20px;
        }

        .btn-nav-room a {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #3490dc; /* Primary color */
            color: white;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-nav-room a:hover {
            background-color: #2779bd; /* Darker shade for hover */
            transform: translateY(-2px);
        }

        .btn-nav-room a:active {
            background-color: #1c3d5a; /* Even darker shade for active */
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <div class="btn-nav-room">
        <a href="{{ url('/dashboard/room/standard') }}">Standard</a>
        <a href="{{ url('/dashboard/room/delux') }}">Delux</a>
        <a href="{{ url('/dashboard/room/superior') }}">Superior</a>
    </div>
</body>

</html>
