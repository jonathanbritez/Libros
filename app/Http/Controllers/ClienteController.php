<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Cliente;

class ClienteController extends Controller
{

	public function index()
	{

     $clientes_list = Cliente:: all();
		return view("clientes.index",["clientes_list" => $clientes_list]);
	}

	public function create()
	{

		return view("clientes.create");
		//echo "funcion index";
	}
    //
  public function store(request $request){

      $nombre= $request->input("nombre");
       $apellido= $request->input("apellido");
       $dni= $request->input("dni");
       $fecha= $request->input("fechaNac");
       $domicilio= $request->input("domicilio");
       //$sexo= $request->input("sexo");

     
    
$persona = new Persona();
       $persona->nombre = $nombre;
       $persona->apellido = $apellido;
       $persona->dni = $dni;
       $persona->fecha_nacimiento = $fecha;
       $persona->domicilio = $domicilio;
       //$persona->sexo = $sexo;
       $persona->save();

    $cliente = new Cliente();
       $cliente->persona_id = $persona->id;
       $cliente->save();
 	

       $mensaje ="cliente creado correctamente";
       return redirect("clientes/create")->with("mensaje",$mensaje);
       
	}
  
      public function show($id)
      {

           $cliente= cliente::find($id);

           return view("clientes.show",["cliente"=>$cliente]);

      }
      public function destroy($id){

        $cliente= cliente:: find($id);
        $persona=$cliente->persona;
        $cliente->delete();
        $persona->delete();

        $mensaje ="cliente eliminado correctamente";
       return redirect("clientes")->with("mensaje",$mensaje);
      }

      public function edit($id)
      {

        $cliente=Cliente::find($id);
        return view("clientes.edit",["cliente"=>$cliente]);


      }

      public function update ( request $request,$id)

      {

       $nombre= $request->input("nombre");
       $apellido= $request->input("apellido");
       $dni= $request->input("dni");
       $fecha= $request->input("fechaNac");
       $domicilio= $request->input("domicilio");

       //obteber el cliete a modificar

       $cliente=Cliente::find($id);

       //asignar datos al cliente
       $cliente->persona->nombre =$nombre;
       $cliente->persona->apellido =$apellido;
       $cliente->persona->dni =$dni;
       $cliente->persona->fecha_nacimiento =$fecha;
       $cliente->persona->domicilio =$domicilio;
       $cliente->persona ->save();
       //$cliente->save();
       $mensaje ="cliente modificado correctamente";
       return redirect("clientes/" . $id . "/edit")->with("mensaje",$mensaje);
      
      }
   
}
?>