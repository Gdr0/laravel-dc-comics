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
    <a href="{{route('users.show', $comic -> id)}}">   {{$comic -> title}} price:{{$comic->price}}</a>
   </li>
   @endforeach
   </ul>
@endsection
