<!DOCTYPE html>
<html>
	<title>Form</title>
<body>
	{!!Form::open(array('url'=>'add'))!!}
	<h3>{!!Form::label('name',' Your Name :')!!}
	{!!Form::text('name')!!}</h3>

	<h3>{!!Form::label('email','Your Email :')!!}
	{!!Form::text('email')!!}</h3>

	<h3>{!!Form::label('pass','Password   :')!!}
	{!!Form::password('pass')!!}</h3>

	{!!Form::submit('Add')!!}
    {!!Form::close()!!}
</body>
</html>
