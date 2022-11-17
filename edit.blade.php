<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="jumbotron bg-primary text-white text-center" >
    <h1>Edit Information</h1>
  </div>
<form action="{{route('update')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
  <div class="mb-3 col-4">
    <label>Student Name</label>
    <input type="text" class="form-control" name="StdName" value="{{$data['StdName']}}" placeholder="Enter Student Name">
  </div>
  <div class="mb-3 col-4">
    <label >Student Contact</label>
    <input type="text" class="form-control" name="StdContact" value="{{$data['StdContact']}}" placeholder="Enter Student Contact" >
  </div>
  <div class="mb-3 col-4">
    <label >Student  Address</label>
    <input type="text" class="form-control" name="StAddress"value="{{$data['StAddress']}}" placeholder="Enter Student Address" >
  </div>

  <input type="submit" class="btn btn-primary" >
</form>
</body>
</html>