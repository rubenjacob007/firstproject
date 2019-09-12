@extends('layout')
@section('title', 'welcome')


@section('content')
<h1> the Ruben  Project </h1>
<ul>
   @foreach($projects as $task) 
<li>{{$task->title}}</li>
<li>{{$task->description}}</li>
@endforeach

</ul>

@endsection