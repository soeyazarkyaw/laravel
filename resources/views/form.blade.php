<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="{{route('create')}}" method="POST" >
  @csrf
  @if(Session::has('sucess'))
  <div class="mt-4 alert alert-warning alert-dismissible fade show" role="alert">
    {{Session::get('sucess')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <div class="form-group mb-3">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" name="gender" id="exampleFormControlSelect1">
      <option value="empty">Choose option</option>
      <option value="0">Male</option>
      <option value="1">Female</option>
      <option value="2">Other</option>
    </select>
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlInput1">Phone Number</label>
    <input type="number" name="phone" class="form-control"  >
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlInput1">Date Of Birth</label>
    <input type="date" name="date" class="form-control"  >
  </div>
  <div class="form-group mb-3">
    <input type="submit" class="btn bg-dark text-white"  value="Register" >
  </div>
</form>
</div>
</body>
</html>