<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Display Data in DATABASE.</h1>

	<table border="1 px" align="center">
		
		<tr>
			<td>Student Name</td>
			<td>Email</td>
			<td>Image</td>
			<td>Delete</td>
			<td>Update</td>
		</tr>

		@foreach($data as $student)

		<tr>
			<td>{{$student->name}}</td>
			<td>{{$student->email}}</td>
			<td>
				<img height="150" width="150" src="student/{{$student->image}}">
			</td>

			<td>
				
				<a href="{{url('delete',$student->id)}}">Delete</a>
			</td>

			<td>
				
				<a href="{{url('update_view',$student->id)}}">Update</a>
			</td>


		</tr>

		@endforeach

		
	</table>

</body>
</html>