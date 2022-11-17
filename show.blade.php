<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron text-white text-center bg-success">
      <h1>Student </h1>
      
    </div>
    <table class="table table-bordered">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Action</th>

</tr>
@foreach($data as $info)

<tr>
    <td>{{$info->id}}</td>
    <td>{{$info->StdName}}</td>
    <td>{{$info->StAddress}}</td>
    <td>{{$info->StdContact}}</td>
   
   <td>{{$info->Action}} <a class="btn btn-warning" href="{{route('edit',$info->id)}}">Edit </a> </td>
   <td>{{$info->Action}} <a class="btn btn-danger" href="{{route('delete',$info->id)}}">Delete </a> </td>
    
    
   
</tr>
@endforeach
</table>

</body>
</html>

