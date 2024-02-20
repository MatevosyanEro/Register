<?php

namespace App\Http\Middleware;

use App\Http\Requests\Users\UserLogInRequest;
use App\Models\User;
use Closure;
use Symfony\Component\HttpFoundation\Response;


class LoginCheck //extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(UserLogInRequest $request, Closure $next): Response
    {
         if(!(User::query() -> where('email',$request -> getEmail() ) ->exists() ) ){
          redirect('/register');
         }
        return $next($request);
    }


}
