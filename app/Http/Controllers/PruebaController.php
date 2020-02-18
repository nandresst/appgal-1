<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; /*agregado para que funcione DB::*/

class PruebaController extends Controller
{
    //
	/***********************************************/
    public function CrudPrueba()
    {

    	//realizamos la consulta a la BD mediante procedimiento previamente creado en ella 
    	$result_lista=DB::select('sp_es_listapersona_ns');
    	//obtenemos el registro 

    	return view('ModuloDev/lista',compact('result_lista')); // lalmamos a la vista y le pasamos el registro
    }
	/**********************************************************/

	public function Guardar(Request $request)
	{

		if($request->get('txtid')==0)// el boton nuevo colocará en el txt id un '0' eso servira para saber que será nuevo
		{
			$dni = $request->get('txtdni');
			$apellidos = $request->get('txtapellidos');	
			$nombres = $request->get('txtnombres');
			$direccion = $request->get('txtdireccion');
			$edad = $request->get('txtedad');

						  DB::update(' sp_es_registrarpersona_ns ?,?,?,?,?', [$dni,$apellidos,$nombres,$direccion,$edad]);	
		}
		else // de tener algun valos diferente de 0 se asume que es un registro a updatear
		{
			$idregistro = $request->get('txtid');
			$dni = $request->get('txtdni');
			$apellidos = $request->get('txtapellidos');	
			$nombres = $request->get('txtnombres');
			$direccion = $request->get('txtdireccion');
			$edad = $request->get('txtedad');

						  DB::update(' sp_es_actualizarpersona_ns ?,?,?,?,?,?', [$idregistro,$dni,$apellidos,$nombres,$direccion,$edad]);
		}

		
		$result_lista=DB::select('sp_es_listapersona_ns');

		return view('ModuloDev/lista',compact('result_lista'));
	}


}
