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

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
    $clientes = User::paginate(20);
    


    return \View::make('users')->with('data', $clientes);//
	
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
	public function show($id, Request $request)
	{

		$user = User::find($id);

	
		


		if ($request->ajax()){
			$this->middleware('token');
			
    		return $user->name;
   		 }



		

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
	public function destroy($id)
	{
			$usuario = User::find($id);
			if (User::destroy($id)){
				\Session::flash('message1', 'El usuario');
				\Session::flash('name', $usuario->getFullName());
				\Session::flash('message2',  'se ha borrado correctamente');
			}
	
		

		return \Redirect::to('/users');
	}

	

}
