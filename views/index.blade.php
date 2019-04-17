<html>
<head>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.css">
    <title>
    </title>
    <body>
<script src="bootstrap-4.1.3-dist/js/jquery.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.js"></script>
<a class="nav-link" href="{{url('logout')}}">Log out</a>
<center>
</br>
    @if(Session::has('email'))
        <h2>  {{ session()->get('email')}}    </h2>
        @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id:</th>
            <th scope="col">Name:</th>
            <th scope="col">Password:</th>
            <th scope="col">Address:</th>
            <th scope="col">Created_at:</th>
            <th scope="col">View:</th>
            <th scope="col">Edit:</th>
            <th scope="col">Delete:</th>
        </tr>
        </thead>
        <tbody>
        @foreach($student as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->password}}</td>
            <td>{{$row->address}}</td>
            <td>{{$row->created_at}}</td>
            <td><a href="{{url('crud',$row->id)}}">View</a></td>
            <td><a href="{{url('crud',[$row->id,'edit'])}}">Edit</a></td>
            </td>
            <td><form method="post" action="{{url('crud',$row->id)}}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input class="btn btn-primary" type="submit" name="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </br>
    <a class="nav-link" href="{{url('crud/create')}}">Add New Record</a>
</center>
</body>
</head>
</html>
