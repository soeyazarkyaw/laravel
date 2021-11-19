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
  <a href="{{ route('list') }}"><div class="btn btn-secondary mt-3 ">List Page</div></a>
<form action="{{route('create')}}" class="mt-3" method="POST" >
  @csrf
  @if(Session::has('sucess'))
  <div class="mt-4 alert alert-success" role="alert">
  {{Session::get('sucess')}}
</div>

  @endif
  <div class="form-group mb-3">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" value="{{old('name')}}" name="name" class="form-control" id="exampleFormControlInput1" >
    @if($errors->has('name'))
    <p class="text-danger">{{$errors->first('name')}}</p>
    @endif
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" value="{{old('email')}}" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    @if($errors->has('email'))
    <p class="text-danger">{{$errors->first('email')}}</p>
    @endif
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" name="gender" id="exampleFormControlSelect1">
      <option value="">Choose option</option>
      <option value="0">Male</option>
      <option value="1">Female</option>
      <option value="2">Other</option>
    </select>
    @if($errors->has('gender'))
      <p class="text-danger">{{$errors->first('gender')}}</p>
      @endif
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" value="{{old('address')}}" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
    @if($errors->has('address'))
    <p class="text-danger">{{$errors->first('address')}}</p>
    @endif
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlInput1">Phone Number</label>
    <input type="number" value="{{old('phone')}}" name="phone" class="form-control"  >
    @if($errors->has('phone'))
    <p class="text-danger">{{$errors->first('phone')}}</p>
    @endif
  </div>
  <div class="form-group mb-3">
    <label for="exampleFormControlInput1">Date Of Birth</label>
    <input type="date" value="{{old('date')}}" name="date" class="form-control"  >
    @if($errors->has('date'))
    <p class="text-danger">{{$errors->first('date')}}</p>
    @endif
  </div>
  <div class="form-group mb-3">
    <input type="submit" class="btn bg-dark text-white"  value="Register" >
  </div>
</form>
</div>
</body>
</html>