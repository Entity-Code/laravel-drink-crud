@extends('layouts.main-layout')

@section('content')
    
    <a href="{{route('drink-create')}}">CREATE YOUR COSTUM DRINK!</a>
    <ul>
        
        @foreach ($drinks as $drink)

        <li>        
            <a href="{{route('drink-show', $drink -> id)}}">
                {{$drink -> name}}
            </a>
            <br>
            <a href="{{route('drink-edit', $drink -> id)}}">EDIT</a>
            <a href="{{route('drink-delete', $drink -> id)}}">DELETE</a>
        </li>
        
            
        @endforeach
    </ul>


@endsection 