<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('calculate')}}" method="POST">
    @csrf
        Num1 <input type="number" name="num1"><br>
        Num2 <input type="number" name="num2"><br>
        Opertor <select name="operator">
                    <option value="empty">Choose Operator</option>
                    <option value="add">+</option>
                    <option value="minus">-</option>
                    <option value="multi">*</option>
                    <option value="division">/</option>
                </select><br>
                <button type="submit">Calculate</button>
                <br><br>
                @if(Session::has('result'))
                <h4>{{Session::get('result')}}</h4>
                @endif
    </form>
</body>
</html>