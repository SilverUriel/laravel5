<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Acceso;
use App\Http\Controllers\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;

class AccesoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$acceso = Acceso::orderBy('nombre')->paginate();

		//return view('acesso.index', compact('acceso'));
		return 'index';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		
		//$acceso =Acceso::create($request->all());
		return 'Se guardo';
	}
	public function store(Request $request)
	{

		$rules = array(
			'nit' => 'required|unique:accesos' ,
			'nombre' => 'required|min:5'
		);

		$validador = Validator::make($request->all(), $rules);

		if($validador->fails()){
			return Redirect::to("/")
			->withErrors($validador)
			->withInput();
		}

		$acceso = Acceso::create($request->all());
		return Redirect::to('acceso');
	}
	

	public function show()
    {
         $usuarios = \DB::table('accesos')->get();
         //return Redirect::to('acceso/show');
    	return \View::make('lista')->with('usuarios', $usuarios);
         //return view('lista')->with('usuarios');
         
         //echo "Se mostraron los datos";
    }
 
	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
