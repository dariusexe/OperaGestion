<?php namespace App\Http\Middleware;

use Closure;
use App\Role;
use Illuminate\Contracts\Auth\Guard;

class Role {


	protected $role;
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{




		return $next($request);
	}

}
