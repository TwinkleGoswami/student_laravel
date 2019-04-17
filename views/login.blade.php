<?php
session_start();
if(isset($_SESSION['email']))
{
    header('Location:crud');
}
?>
<html>
<head>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>
    </title>
<body>
<script src="bootstrap-4.1.3-dist/js/jquery.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<h1>Login Page</h1>
@if($errors->any())
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif
<form method="post" action="{{url('login/chk_login')}}">
    {{csrf_field()}}
    <div class="form-group">
        <label> Email Id:</label>
        <input type="email" class="form-control" name="email" placeholder="Enter Email Id">
    </div>
    <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <input class="btn btn-primary" name="submit" type="submit" value="Submit">
</form>
</body>
</head>
</html>
