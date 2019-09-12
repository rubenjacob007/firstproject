<form action="/project" method="POST">


{{csrf_field()}}
	<input type="text" name="title" placeholder="Title" required="required" value="{{old('title') }}"><br/>
	<input type="textarea" name="description" placeholder="description" required="required" value="{{old('description') }}"><br/>
	<button type="submit"> Create a Project</button>

	<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
	</ul>


	

</form>