@extends('layouts.main-layout')

@section('content')
    
<form action="{{ route('drink-store') }}" method='POST'>

    @csrf
    @method('POST')

    <label for="name">Name:</label>
    <input name="name" type="text">

    <br>

    <label for="gradation">Gradation (%):</label>
    <input name="gradation" type="text">

    <br>

    <label for="price">Price (€):</label>
    <input name="price" type="text">

    <br>

    <input type="submit" value="SAVE">
</form>



@endsection 