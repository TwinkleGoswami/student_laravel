<html>
<head>
    <link rel="stylesheet" href="../../bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>
    </title>
<body>
<script src="../../bootstrap-4.1.3-dist/js/jquery.js"></script>
<script src="../../bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <h1>Update Information</h1>
    @if($errors->any())
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    @endif
    <form method="post" action="{{url('crud',$student->id)}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" value="{{$student->name}}" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" value="{{$student->password}}" placeholder="Password">
        </div>
        <div class="form-group">
            <label> Address:</label>
            <input type="text" class="form-control" name="address" value="{{$student->address}}" placeholder="Enter Address">
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="Update">
    </form>
</body>
</head>
</html>
