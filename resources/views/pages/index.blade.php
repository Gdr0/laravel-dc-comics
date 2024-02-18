@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
   <h1> COMICS : {{count($comics)}}</h1>
   <a href="{{route('users.create')}}">CREATE</a>
   <ul style="list-style-type: none;">
   @foreach($comics as $comic)
   <li>
    <a href="{{route('users.show', $comic -> id)}}">  
    <ul>
        <li>Title: {{$comic -> title}}</li>
        <li>price:{{$comic->price}}</li>
    </ul>
    </a>
    <a href= "{{ route('users.edit', $comic->id) }}" class="mx-2">
        EDIT
    </a>
    <form action="{{route('users.destroy', $comic-> id)}}" class="d-inline-block" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="X">
    </form>
   </li>
   @endforeach
   </ul>
@endsection


