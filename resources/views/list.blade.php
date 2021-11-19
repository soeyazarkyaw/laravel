<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div class="container">
 @if(Session::has('success'))
 <div class="my-3 alert alert-success alert-dismissible fade show" role="alert">
   {{Session::get('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  @endif
   @if(Session::has('sucess'))
 <div class="my-3 alert alert-secondary alert-dismissible fade show" role="alert">
   {{Session::get('sucess')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  @endif
 <table class="table">
  <thead class="table-dark">
    <th>No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th></th>
  </thead>
  <tbody>
        @foreach($customer as $item)
            <tr>
                <td>{{$item->customer_id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>
                <a href="{{ route('edit',$item->customer_id) }}"><div class="btn btn-dark">Edit</div></a>
                <a href="{{ route('delete',$item->customer_id) }}"><div class="btn btn-danger">delete</div></a>
                <a href="{{ route('seemore',$item->customer_id) }}"><div class="btn btn-secondary">See more...</div></a>
                </td>
            </tr>
        @endforeach
  </tbody>
</table>
{{$customer->links()}}
<a href="{{ route('register') }}"><div class="btn btn-info mt-2">back</div></a>
 </div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<!-- JavaScript Bundle with Popper -->
</html>