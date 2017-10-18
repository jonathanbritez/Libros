<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
	<div align="center">
            
			
			{{session("mensaje")}}

		<br>
		<form action="{{asset('clientes/' . $cliente->id)}}" method="POST">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_Token" value="{{Csrf_Token()}}">
			
			Nombre:<input type="text" name="nombre" value="{{$cliente->persona->nombre}}"><br>
			Apellido:<input type="text" name="apellido" value="{{$cliente->persona->apellido}}"><br>
			Dni:<input type="text" name="dni" value="{{$cliente->persona->dni}}"><br>
			Fecha de Nacimiento:<input type="date" name="fechaNac" value="{{$cliente->persona->fecha_nacimiento}}"><br>
			Domicilio:<input type="text" name="domicilio" value="{{$cliente->persona->domicilio}}"><br>
			
		    <input type="submit" value="Modificar Datos" ><br>
		</form>	
          <br>
		    <a href="/libros/public/clientes">Listado</a>

	</div>
</body>
</html>