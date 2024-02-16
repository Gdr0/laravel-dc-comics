@extends('layouts.main-layout')
@section('head')
    <title>SHOW</title>
@endsection
@section('content')
   <h1> COMIC : {{$comic -> title}}</h1>
   <ul style="list-style-type: none;">
   <li >
    <div>{{$comic -> author}}</div>
    <div>{{$comic -> description}}</div>
    <div>{{$comic -> price}}</div>
   </li>
   
   </ul>
@endsection
