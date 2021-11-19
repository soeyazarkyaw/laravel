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
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card">
                    <div class="card-header fs-5 text-center">
                        Customer Data
                    </div>
                    <div class="card-body">
                    <form action="{{ route('update',$customer[0]->customer_id) }}" class="mt-3" method="POST" >
                        @csrf
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Name</label>
                            <input value="{{old('name',$customer[0]->name)}}" type="text" name="name" class="form-control" id="exampleFormControlInput1" >
                            @if($errors->has('name'))
                            <p class="text-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input value="{{old('email',$customer[0]->email)}}" type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            @if($errors->has('email'))
                            <p class="text-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Gender</label>
                            <select class="form-control" name="gender" id="exampleFormControlSelect1">
                            @if($customer[0]->gender == 0)
                            <option value="">Choose option</option>
                            <option selected value="0">Male</option>
                            <option value="1">Female</option>
                            <option value="2">Other</option>
                            @elseif($customer[0]->gender == 1)
                            <option value="">Choose option</option>
                            <option value="0">Male</option>
                            <option selected value="1">Female</option>
                            <option value="2">Other</option>
                            @elseif($customer[0]->gender == 2)
                            <option value="">Choose option</option>
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                            <option selected value="2">Other</option>
                            @else
                            <option selected value="">Choose option</option>
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                            <option value="2">Other</option>
                            @endif
                            </select>
                            @if($errors->has('gender'))
                            <p class="text-danger">{{$errors->first('gender')}}</p>
                            @endif
                        </div>
                        <div class="form-group my-3">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea  class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">{{old('address',$customer[0]->address)}}</textarea>
                            @if($errors->has('address'))
                            <p class="text-danger">{{$errors->first('address')}}</p>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Phone Number</label>
                            <input value="{{old('phone',$customer[0]->phone)}}" type="number" name="phone" class="form-control"  >
                            @if($errors->has('phone'))
                            <p class="text-danger">{{$errors->first('phone')}}</p>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Date Of Birth</label>
                            <input value="{{old('date',$customer[0]->date)}}" type="date" name="date" class="form-control"  >
                            @if($errors->has('date'))
                            <p class="text-danger">{{$errors->first('date')}}</p>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" class="btn bg-dark text-white"  value="update" >
                            <a href="{{ route('list') }}"><div class="btn btn-dark text-white">back</div></a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>