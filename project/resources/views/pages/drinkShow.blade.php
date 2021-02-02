@extends('layouts.main-layout')

@section('content')
    
    <ul>
        <strong>Id</strong> : ({{$drink -> id}}) <br>
        <strong>Name</strong> : {{$drink -> name}} <br>
        <strong>Gradation</strong> : {{$drink -> gradation}} % <br>
        <strong>Price</strong> : {{$drink -> price}} €

    </ul>



@endsection 