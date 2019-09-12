<h1>{{$projects->title}} </h1></br>
<h1>{{$projects->description}} </h1>

@foreach($projects->tasks as $taskss)

<li>  {{$taskss->description}} </li>

@endforeach
<a href="{{$projects->id}}/edit"> Edits </a>


	@if($projects->tasks->count())
<div>
	@foreach($projects->tasks as $task)

<div>
	<form method="POST" action="\tasks\{{$task->id}}">
	{{method_field('patch')}}

{{csrf_field()}}
<label class="checkbox" for="completed">
	<input type="checkbox" name="completed" onChange="this.form.submit();">

	{{$task->description}}

</label>
</form>
</div>
@endforeach

</div>
<form class="box" action="\project\{{$projects->id}}\tasks" method="POST">
	{{csrf_field()}}
<div class="field">
	<label class="label" for="description" >New Task</label>


<input type="type" name="description" placeholder="description">

<button type="submit">Submit</button>

</div>



 </form>
@endif

