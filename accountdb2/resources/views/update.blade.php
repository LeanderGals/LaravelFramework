<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        h1 {
            font-size: 35px;
            text-align: center;
            color: white;
        }

        * {
            box-sizing: border-box;
        }

        .input {
            padding: 16px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type="text"]::placeholder {
            text-align: center;
        }

        body {
            text-align: center;
            background-image: url("../images/bg5.gif");
            background-size: cover;
        }

        form,
        .content {
            width: 30%;
            margin: 0px auto;
            padding: 20px;
            border: 1px;
            border-radius: 0px 0px 10px 10px;
        }

        .input {
            color: white;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            background-color: #ddd;
            outline: none;
        }

        .registerbtn {
            background-color: #04aa6d;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 50;
        }

        a {
            color: dodgerblue;
        }

        .signin {
            text-align: center;
        }

        .all {
            color: white;
        }       
    </style>
</head>

<body>
    <h1>Update</h1>
    <div class=input>
        <form action="/update2" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">

            <label class="required">ID:</label>
            <input type="text" placeholder="Enter Student ID" name="studID" value="{{$data ['studID']}}" required>

            <label class="required">Last Name:</label>
            <input type="text" placeholder="Enter Last Name" name="lname" value="{{$data ['lname']}}" required>

            <label class="required">First Name</label>
            <input type="text" placeholder="Enter First Name" name="fname" value="{{$data ['fname']}}" required>

            <label class="required">MI</label>
            <input type="text" placeholder="Enter Middle Initial" name="MI" value="{{$data ['MI']}}" required>

            <label class="required">Course</label>
            <input type="text" placeholder="Enter Course" name="course" value="{{$data ['course']}}" required>

            <label class="required">Year Level</label>
            <input type="text" placeholder="Enter Year Level" name="yearlevel" value="{{$data ['yearlevel']}}" required>


            <button type='submit' class='btn btn-success'>Submit</button>

        </form>
    </div>
</body>

</html>