<html>
<head>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>
    </title>
<body>
<script src="bootstrap-4.1.3-dist/js/jquery.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<h1>Registeration Page</h1>

<form method="post" action="{{url('register/store')}}">
    {{csrf_field()}}
    <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Name">
        <div id ="show-error"></div>
    </div>
    <div class="form-group">
        <label> Email Id:</label>
        <input type="email" class="form-control" name="email" placeholder="Enter Address">
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
