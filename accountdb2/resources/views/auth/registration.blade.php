<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <style>
        .required:after {
            content: " *";
            color: red;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <h1>Registration</h1>
   
    <div class=input style="text-align: center;">
        <form method="post" action="{{route('register-user')}}">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
                <label class="required">ID:</label>
                <input type="text" placeholder="Enter Student ID" name="studID" required>
            
                <label class="required">Last Name:</label>
                <input type="text" placeholder="Enter Last Name" name="lname" required>
            
                <label class="required">First Name</label>
                <input type="text" placeholder="Enter First Name" name="fname" required>
           
                <label class="required">MI</label>
                <input type="text" placeholder="Enter Middle Initial" name="MI" required>
            
                <label class="required">Course</label>
                <input type="text" placeholder="Enter Course" name="course" required>
            
                <label class="required">Year Level</label>
                <input type="text" placeholder="Enter Year Level" name="yearlevel" required>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            
                <button type='submit' class='registerbtn' name="register_btn">Register</button>
            <div class= "con signin">
            <p>
                Already have an account? <a href="login">Sign in</a>
            </p>
            </div>
        </form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>