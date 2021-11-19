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
                    <div class="card-header text-center fs-4">
                        Customer Edit
                    </div>
                    <div class="card-body ps-5 ms-5 fs-5">
                        <div class="my-3">
                            <label >Name</label> : <label >{{$customer['name']}}</label>
                        </div>
                        <div class="my-3">
                            <label >Email</label> : <label >{{$customer['email']}}</label>
                        </div>
                        <div class="my-3">
                            <label >Address</label> : <label >{{$customer['address']}}</label>
                        </div>
                        <div class="my-3">
                            <label >Gender</label> : <label >
                                @if($customer['gender'] == 0)
                                Male
                                @elseif($customer['gender'] == 1)
                                Female
                                @elseif($customer['gender'] == 2)
                                Other
                                @endif
                            </label>
                        </div>
                        <div class="my-3">
                            <label >Phone</label> : <label >{{$customer['phone']}}</label>
                        </div>
                        <div class="my-3">
                            <label >DOB</label> : <label >{{$customer['date']}}</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('edit',$customer['id']) }}"> <div class="btn btn-danger">Cancle</div></a>
                        <a href="{{ route('realupdate') }}"> <div class="btn btn-primary">Save</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
