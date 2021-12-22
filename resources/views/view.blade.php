<?php
use App\Models\Students;
$students=Students::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h2><a href="/main"><center>Go to DashBoard</center></a></h2>
<h1>Oorwin Members</h1>
<table id="customers">
<tr>
<th>ID</th>
<th>Email</th>
<th>Password</th>
<th>Created_At</th>
<th>Updated_At</th>
</tr>
@foreach ($students as $student)
<tr>
<td>{{$student->ID}}</td>
<td>{{$student->Email}}</td>
<td>{{$student->Password}}</td>
<td>{{$student->created_at}}</td>
<td>{{$student->updated_at}}</td>
</tr>
@endforeach
</table>
</body>
</html>
