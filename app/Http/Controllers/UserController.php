<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Redirect;
use Session;
use View;

class UserController extends Controller {
    
    public function __construct(){
     $this->middleware('auth');   
    }

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
    $clientes = User::all();
    


    return View::make('users')->with('data', $clientes);//
	
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userCreate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

        $rules = array(
            'email' => 'required|unique:users,email|email',
            'name' => 'required',
            'lastName' => 'required',
            'phone' => 'required|digits:9',
            'password' => 'required');
        
        $data = $request->all();
        $this->validate($request, $rules);
   		Session::flash('message', 'El usuario '.$data['email'].' se ha creado correctamente');
        $user = User::create($data);
        return Redirect::to('/users');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, Request $request)
	{

		$user = User::find($id);
		

		return View::make('showUser')->with('user', $user);


		
    

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		
		return View::make('userEdit')->with('user', $user);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		
		$user = User::find($id);
		
		
		$rules2 = array(
            'email' => 'required|email',
            'name' => 'required',
            'lastName' => 'required',
            'phone' => 'required|digits:9',
            'password' => '');
        
        $data = $request->all();
        $this->validate($request, $rules2);
   		$user->fill($data);
   		$user->save();
        
        Session::flash('message1', 'El usuario');
		Session::flash('message2',  'se ha modificado correctamente');
		Session::flash('name', $data['name']." ".$data['lastName']);
        

        return Redirect::to('/users');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			$usuario = User::find($id);
			if (User::destroy($id)){
				Session::flash('message1', 'El usuario');
				Session::flash('name', $usuario->getFullName());
				Session::flash('message2',  'se ha borrado correctamente');
			}
	
		

		return Redirect::to('/users');
	}

	

}
