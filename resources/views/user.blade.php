<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('cal')}}" method="POST">
        @csrf
        Num1 <input type="number" name="num1"><br>
        Num2 <input type="number" name="num2"><br>
        <input type="submit" value="save">
    </form>

    @if(Session::has('result'))
        {{ Session::get('result')}}
    @endif
</body>
</html>