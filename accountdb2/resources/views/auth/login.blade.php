<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <style>
        .loginbtn {
            background-color: #04aa6d;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .loginbtn:hover {
            opacity: 50;
        }

        input[type="password"]::placeholder {
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <h1>Login</h1>
    <div class="input" style="text-align: center;">
        <form method="POST" action="{{route ('login-user')}}">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
           @csrf
            <label class="required">Username:</label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label class="required">Password:</label>
            <input type="password" placeholder="Enter Password" name="pwd" required>
            <button type='submit' class='loginbtn' name="login_btn">Login</button>
            <p style="text-align: center;">Not yet registered? <a href="registration">Sign up</a></p>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>