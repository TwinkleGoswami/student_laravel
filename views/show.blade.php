
<html>
<head>
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>
    </title>
<body>
<script src="../bootstrap-4.1.3-dist/js/jquery.js"></script>
<script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<center>
</br>
</br>
</br>
    <h2>View Record</h2>
</br>
</br>
</br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id:</th>
            <th scope="col">Name:</th>
            <th scope="col">Password:</th>
            <th scope="col">Address:</th>
            <th scope="col">Created_at:</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->password}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->created_at}}</td>
        </tr>
        </tbody>
    </table>
</center>
</body>
</head>
</html>
