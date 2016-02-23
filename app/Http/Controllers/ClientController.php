<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller {


	$rules = array(   "name" => ""
						  "lastName" => ""
						  "identification" => ""
						  "type" => "Pyme"
						  "phone" => ""
						  "email" => ""
						  "legalPartner" => ""
						  "CIFLegalPartner" => ""
						  "country" => ""
						  "city" => ""
						  "address" => ""
						  "PC" => ""
						  "IBAN" => ""
						  "contactPerson" => ""
						  "contactPhone" => ""
						  "comentary" => "");

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
		return view('user.edit')->with('client', $client);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
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
