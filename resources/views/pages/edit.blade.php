
@extends('layouts.main-layout')
@section('head')
    <title>EDIT</title>
@endsection
@section('content')
   <h1>
    [ {{$comic-> id}} ] EDIT COMIC:</h1>
   <div class="container d-flex justify-content-center">
       <form style="width: 50%;"
        action="{{route('users.update' , $comic-> id)}}"
         method="POST">
     
           @csrf
           @method('PUT')

           <div class="mb-3">
               <label for="title" class="form-label">Title</label>
               <input type="text" id="title" name="title" class="form-control" value= "{{ $comic -> title}}" >
           </div>
           <div class="mb-3">
               <label for="author" class="form-label">Author</label>
               <input type="text" id="author" name="author" class="form-control" value= "{{ $comic -> author}}">
           </div>
           <div class="mb-3">
               <label for="description" class="form-label">Description</label>
               <input type="text" id="description" name="description" class="form-control" value= "{{ $comic -> description}}">
           </div>
           <div class="mb-3">
               <label for="price" class="form-label">Price</label>
               <input type="text" id="price" name="price" class="form-control" value= "{{ $comic -> price}}">
           </div>
           <button type="submit" class="btn btn-primary">UPDATE</button>
       </form>
   </div>
@endsection
