<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Report Messages</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

        .login_submit {
            background: #fff;
            font-size: 12px;
            margin-top: 30px;
            padding: 12px 17px;
            border-radius: 17px;
            border: 1px solid #D4D3E8;
            text-transform: uppercase;
            font-weight: 700;

            align-items: center;
            width: 15%;
            color: #029d43;
            box-shadow: 0px 2px 2px #07967b;
            cursor: pointer;
            transition: .2s;
        }

        .login_input:active,
        .login_input:focus,
        .login_input:hover {
            outline: none;
            border-bottom-color: #079e61;
        }

        .login_input {
            border: none;
            border-bottom: 2px solid #D1D1D4;
            background: none;
            margin-right: 40px;
            padding: 10px;
            padding-left: 24px;
            font-weight: 700;
            width: 30%;
            transition: .2s;
        }

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/logout') }}">LogOut</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">


        <table class="styled-table">

            <form action="{{ url('report') }}" method="post">

                {{ csrf_field() }}

                <label for="phoneNumber"><b>Filter by phoneNumber </b></label>
                <input type="text" class="login_input" placeholder="Enter phoneNumber" name="phoneNumber" required>

                <button type="submit" class="login_submit">filter</button>

            </form>

            <thead>
            <tr>
                <th>id</th>
                <th>body</th>
                <th>to_phoneNumber</th>
                <th>status</th>
                <th>error</th>
                <th>nameApi</th>
            </tr>
            </thead>
            <tbody>

            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->body }}</td>
                    <td>{{ $message->to_phoneNumber }}</td>
                    <td>{{ $message->status }}</td>
                    <td>{{ $message->error }}</td>
                    <td>{{ $message->nameApi }}</td>
                </tr>
            @endforeach
            <!-- and so on... -->
            </tbody>
        </table>

    </div>


</div>

</body>
</html>
