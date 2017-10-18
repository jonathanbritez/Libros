clientes: {{$cliente->persona->apellido}},{{$cliente->persona->nombre}},{{$cliente->persona->dni}}

<br><br>

<form method="POST" action="{{asset('clientes/'.$cliente->id)}}">

	{{method_field('DELETE')}}

	<input type="hidden" name="_Token" value="{{Csrf_Token()}}">
	<input type="submit" value="Eliminar">

</form>	

