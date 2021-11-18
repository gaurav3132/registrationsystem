<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: rgb(161, 240, 240);">
<div style="text-align:center;
        margin-top:50px;">
    <form action="loginsuccess" method="POST">
        @csrf
        <h2>Login</h2>
        @if(session('message'))
        <h6 style="color:red">{{ session('message')}} </h4>
        @endif

        <input type="text" class="box"  name="username" placeholder="Username" required />
        <br><br>
        <input type="password" class="box"  name="password" placeholder="Password" required />
        <br>
        <br>  
        <input type="submit" value="Login" id="submit" />
    </form>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
