<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
       @extends('menuPrincipal')

       @section('content')
			
			{{session("mensaje")}}

		<br>
		<form action="{{asset('clientes')}}" method="POST">
			<input type="hidden" name="_Token" value="{{Csrf_Token()}}">
			Nombre:<input type="text" name="nombre" ><br>
			Apellido:<input type="text" name="apellido" ><br>
			Dni:<input type="text" name="dni" ><br>
			Fecha de Nacimiento:<input type="date" name="fechaNac" ><br>
			Domicilio:<input type="text" name="domicilio" ><br>
			
		    <input type="submit" value="Guardar Datos" ><br>
		</form>	
          <br>
		    <a href="/libros/public/clientes">Listado</a>

		@endsection

	</div>
</body>
</html>