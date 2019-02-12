<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personalizacion</title>

</head>
<body>
	<p>Idioma: {{$idioma}}</p>
@if ($errors->any())

<div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if($idioma == 'en')
  {{'Hello my friend'}}
@endif
@if($idioma == 'es')
  {{'Hola amigo'}}
@endif
@if($idioma == 'fr')
  {{"salut l'ami"}}
@endif
	<form action="/idioma" method="post">
     @csrf
		Idioma:
		<select name="idioma">
      <option value=""></option>
			<option value="es">Español</option>
			<option value="en">Inglés</option>
			<option value="fr">Francés</option>
		</select>
		<br />
		<input type="submit" value="Enviar">
	</form>

</body>
</html>
