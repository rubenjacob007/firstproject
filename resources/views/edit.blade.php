<form action="/project/{{$projects->id}}" method="POST">
{{method_field('patch')}}

{{csrf_field()}}
	<input type="text" name="title" placeholder="Title" value="{{$projects->title}}"><br/>
	<input type="textarea" name="description" placeholder="description" value="{{$projects->description}}" ><br/>
	<button type="submit"> Update a Project</button>
	

</form>

<form action="/project/{{$projects->id}}" method="POST">
	{{method_field('DELETE')}}

	{{csrf_field()}}

	<button type="submit"> Delete a Project</button>

</form>