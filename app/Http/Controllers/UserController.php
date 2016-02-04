<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Roles;

class UserController extends Controller {
    
    public function __construct(){
     $this->middleware('auth');   
    }


    public function getRoleSon()
	{
		$role = \Auth::user()->role;
		$canCreate = array();
		
		
		$canRole = Roles::all();
		foreach ($canRole as $a) {
			
			if ($a->id <= $role){
				$canCreate[$a->id] = $a->name;
			}
		}


		ksort($canCreate);

		return $canCreate;
		
		
	}
	

	 public function getRoleValidation()
	{
		$role = \Auth::user()->role;
		$e = 1;
		$validationRule = $e.",".$role;
		
		return $validationRule;
	}

	 public function test()
	{
		$this->getRoleId('admin');

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
    $clientes = User::where('role', '<=', \Auth::user()->role);
    $clientes = $clientes->paginate(10);
    return \View::make('users')->with('users', $clientes);//
	
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$role = (\Auth::user()->role);
		$roleSon = $this->getRoleSon();

		return \View::make('userCreate')->with('roleSon', $roleSon);
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
            'role' => 'required|between:'.$roleValidation,);
        
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
		
		$roleSon = $this->getRoleSon();
		return \View::make('userEdit')->with('user', $user)->with('roleSon', $roleSon);

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
            'role' => 'required|between:'.$roleValidation);
        
        $data = $request->all();
        $this->validate($request, $rules2);
   		$user->fill($data);
   		$user->save();
        
        \Session::flash('message1', 'El usuario');
		\Session::flash('message2',  'se ha borrado correctamente');
		\Session::flash('name', $data['email']);
        

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
				\Session::flash('message1', 'El usuario');
				\Session::flash('message2',  'se ha borrado correctamente');
				\Session::flash('name', $user->name);
			}
	
		}

		return \Redirect::to('/users');
	}

	

}
