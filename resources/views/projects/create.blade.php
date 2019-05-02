@extends('layout')

@section('content')

<h2>Create Project</h2>
<form method="POST" action="/projects">
	{{csrf_field()}}
	<div>
		<input type="text" name="title" placeholder="Project title">
	</div>
	<div>
		<textarea name="description" placeholder="Project description"></textarea>
	</div>
	<div>
		<button type="submit">Create project</button>
	</div>
</form>

@endsection