@extends('layout.style')

@section('contact')
    <form action="{{route('save')}}" method="POST">
        @csrf
        name <input type="text" name="name"><br>
        email <input type="email" name="email"><br>
        address <input type="address" name="address"><br>
        phone <input type="number" name="phone"><br>
        <input type="submit" value="Save"><br>
    </form>

    @if(Session::has('sucess'))
        {{Session::get('sucess')}}
    @endif

    @if(Session::has('fail'))
        {{Session::get('fail')}}
    @endif

    @endsection