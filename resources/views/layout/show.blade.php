@extends('layout.style')

@section('contact')


@if($userInfo != null)
    <h1>Name::{{$userInfo['name']}}</h1><br>
    <h1>Email::{{$userInfo['email']}}</h1><br>
    <h1>Address::{{$userInfo['address']}}</h1><br>
    <h1>Phone::{{$userInfo['phone']}}</h1><br>

@else
    <h1>There is no data</h1>

@endif
@endsection