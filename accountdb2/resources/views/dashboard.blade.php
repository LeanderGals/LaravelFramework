<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        .center {
            color: white;
        }

        table,
        th,
        td {
            border: 5px solid gray;
            border-radius: 10px;
            text-align: center;
        }

        
    </style>
</head>

<body>
    <h1>Hello User! </h1>

    <table border="1" class="center">
        <tr>
            <td>Student ID</td>
            <td>Last Name</td>
            <td>First Name</td>
            <td>Middle Initial</td>
            <td>Course</td>
            <td>Year Level</td>
            <td>Status</td>
            <td>Action</td>
            <td>Action</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user['studID']}}</td>
            <td>{{$user['lname']}}</td>
            <td>{{$user['fname']}}</td>
            <td>{{$user['MI']}}</td>
            <td>{{$user['course']}}</td>
            <td>{{$user['yearlevel']}}</td>
            <td>{{$user['status']}}</td>
            <td><a href={{"delete/".$user['id']}} class="btn btn-danger">Delete</a></td>
            <td><a href={{"edit/".$user['id']}} class="btn btn-success">Update</a></td>

        </tr>
        @endforeach
    </table>
    <div style="text-align: center; margin:50px">
        <a href="login" class="btn btn-success">Logout</a>
    </div>


</body>

</html>