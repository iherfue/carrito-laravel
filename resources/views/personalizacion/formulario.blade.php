<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personalizacion</title>
	<style>
	body{
		font-size: {{$fuente}};
	}
	</style>
</head>
<body>
	<p>fuente: {{$fuente}}</p>
@if ($errors->any())

<div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form action="/personalizacion" method="post">
     @csrf
		Fuente:
		<select name="fuente">
      <option value=""></option>
			<option value="24pt">Grande</option>
			<option value="16pt">Mediana</option>
			<option value="12pt">Pequeña</option>
		</select>
		<br />
		<input type="submit" value="Enviar">
	</form>
  
</body>
</html>
