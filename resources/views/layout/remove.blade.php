@extends('layout.style')

@section('contact')
    <h1>
    @if(Session::has('sucess'))
        {{Session::get('sucess')}}
    @endif
    </h1>
@endsection