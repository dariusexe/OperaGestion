<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

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
		
    $clientes = User::paginate(20);
    return \View::make('users')->with('users', $clientes);//
	
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('userCreate');
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
            'tlf' => 'required|digits:9',
            'password' => 'required',
            'role' => 'required',);
        
        $data = $request->all();
        $this->validate($request, $rules);
   		\Session::flash('message', 'El usuario <b>'.$data['email'].'</b> se ha creado correctamente');
        $user = User::create($data);
        return \Redirect::to('/users');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findById($id);
		return \View::make('showUser')->with('user', $user);

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
	public function destroy($email)
	{

		$users = User::where('email', $email)->get();
		$usersDelete = User::where('email', $email);
		foreach ($users as $user){
		
			if ($usersDelete->delete()){
				\Session::flash('message', 'El usuario <b>'.$user->name.'</b> se ha borrado correctamente');
			}
	
		}

		return \Redirect::to('/users');
	}

}
