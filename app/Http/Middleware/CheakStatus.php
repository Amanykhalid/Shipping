<?php

namespace App\Http\Middleware;

use Closure;

class CheakStatus
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
        $userStatus=session()->get('user')['status'];

        if($userStatus == 'مفعل'){
            return $next($request);
        }
        return redirect()->back()->with(['error' => 'هذا الحساب غير مفعل']);
    }
}
