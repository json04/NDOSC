<?php

namespace App\Http\Middleware;

use Closure;
use Flash;
class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if($user && $user->account_types_id == 1)
        {
            return $next($request);
        }
        flash('Oops! You are not logged in as Administrator. You connot access the restricted page.', 'danger');
        return back()->withInput(); 
    }
}
