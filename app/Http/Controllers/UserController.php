<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {
    
    public function __construct(){
     $this->middleware('auth');   
    }
    public function getRoleChild($role)
	{
		if ($role == "sadmin"){
			return array('sadmin', 'admin', 'editor', 'usuario');
		}
		if ($role == "admin"){
			return array('admin', 'editor', 'usuario');
		}
		if ($role == "editor"){
			return array('editor', 'usuario');
		}
		if ($role == "usuario"){
			return array('0' => "usuario" );
		}
	}

	 public function getRoleValidation($role)
	{
		if ($role == "sadmin"){
			return "sadmin,admin,editor,usuario";
		}
		if ($role == "admin"){
			return "admin,editor,usuario";
		}
		if ($role == "editor"){
			return "editor,usuario";
		}
		if ($role == "usuario"){
			return  "usuario";
		}
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
		$roleValidation = $this->getRoleValidation(\Auth::user()->role);
        $rules = array(
            'email' => 'required|unique:users,email|email',
            'name' => 'required',
            'lastName' => 'required',
            'tlf' => 'required|digits:9',
            'password' => 'required',
            'role' => 'required|in:'.$roleValidation,);
        
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
		$user = User::find($id);
		
		$roleChild = $this->getRoleChild($user->role);
		return \View::make('userEdit')->with('user', $user)->with('roleChild', $roleChild);

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
		$roleValidation = $this->getRoleValidation($user->role);
		
		
		$rules2 = array(
            'email' => 'required|email',
            'name' => 'required',
            'lastName' => 'required',
            'tlf' => 'required|digits:9',
            'password' => '',
            'role' => 'required|in:'.$roleValidation);
        
        $data = $request->all();
        $this->validate($request, $rules2);
   		$user->fill($data);
   		$user->save();
        
        \Session::flash('message', 'El usuario <b>'.$data['email'].'</b> se ha actualizado correctamente');
        return \Redirect::to('/users');
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
				\Session::flash('message', 'El usuario <b>'.$user->name.'</b> se ha actualizado correctamente');
			}
	
		}

		return \Redirect::to('/users');
	}

	

}
