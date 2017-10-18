<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    //
    public function index()
  {

     $proveedores_list = Proveedor:: all();
    return view("proveedores.index",["proveedores_list" => $proveedores_list]);
  }

  public function create()
  {

    return view("proveedor.prov_create");
    //echo "funcion index";
  }


    public function store(request $request){

      $razon= $request->input("raz");
       $domicilio= $request->input("domi");
       $email= $request->input("e_mail");
       $celular= $request->input("Cel");
       $telefono_fijo= $request->input("Tel");



     $proveedor = new Proveedor();
       $proveedor->razon_social = $razon;
       $proveedor->domicilio = $domicilio;
       $proveedor->email = $email;
       $proveedor->celular = $celular;
       $proveedor->telefono_fijo = $telefono_fijo;
     
       $proveedor->save();  

     }
}

?>