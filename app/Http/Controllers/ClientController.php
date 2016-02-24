<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller {


	

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = Client::paginate(15);
		return view('clients.clients')->with('data', $clients);	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clients.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		
		$rules = array(   "name" => "required",
						  "lastName" => "required",
						  "identification" => "required|unique:clients,identification",
						  "type" => "",
						  "phone" => "required|digits:9",
						  "email" => "email",
						  "legalPartner" => "",
						  "CIFLegalPartner" => "",
						  "country" => "required",
						  "city" => "required",
						  "address" => "required",
						  "PC" => "required|digits:5",
						  "IBAN" => "",
						  "contactPerson" => "",
						  "contactPhone" => "digits:9",
						  "comentary" => "");
		$data = $request->all();
		$this->validate($request, $rules);
		if (Client::create($data)){
			\Session::flash('message', 'El cliente '.$data['name'].' '.$data['lastName'].' se ha creado correctamente');
		}
		else{
			\Session::flash('error', 'No se ha podido crear el cliente');
		}
		return \Redirect::to('/clients');
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$client = Client::find($id);

		return view('clients.edit')->with('client', $client);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = Client::find($id);
		return view('clients.edit')->with('client', $client);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$client = Client::find($id);
		$rules2 = array(   "name" => "required",
						  "lastName" => "required",
						  "identification" => "",
						  "type" => "",
						  "phone" => "required|digits:9",
						  "email" => "email",
						  "legalPartner" => "",
						  "CIFLegalPartner" => "",
						  "country" => "required",
						  "city" => "required",
						  "address" => "required",
						  "PC" => "required|digits:5",
						  "IBAN" => "",
						  "contactPerson" => "",
						  "contactPhone" => "digits:9",
						  "comentary" => "");
		$data = $request->all();
		$this->validate($request, $rules2);
   		$client->fill($data);
   		$client->save();
        
        \Session::flash('message1', 'El cliente');
		\Session::flash('message2',  'se ha modificado correctamente');
		\Session::flash('name', $data['name']." ".$data['lastName']);
        

        return \Redirect::to('/clients');
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
