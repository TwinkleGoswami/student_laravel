<html>
<head>
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>
    </title>
<body>
<script src="../bootstrap-4.1.3-dist/js/jquery.js"></script>
<script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <h1>Add Information</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        @endif
    <form method="post" action="{{url('crud')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name">
            <div id ="show-error"></div>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label> Address:</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Address">
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="Submit">
    </form>
{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--$('#submit').click(function () {--}}
            {{--var name=$('#name').val();--}}
            {{--if(name == "")--}}
            {{--{--}}
                {{--$('#show-error').html('*The username is required.');--}}
                {{--$('#show-error').css('color','red');--}}

            {{--}  return false;--}}
        {{--});--}}
        {{----}}
    {{--});--}}
{{--</script>--}}
</body>
</head>
</html>
