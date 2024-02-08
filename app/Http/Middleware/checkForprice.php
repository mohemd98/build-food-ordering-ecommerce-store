<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class checkForprice
{

    public function handle(Request $request, Closure $next): Response
    {

        if($request->url('proudcts/checkout') OR $request->url('proudcts/pay')
            OR $request->url('proudcts/success')) {
            if(Session::get('value') == 0) {
                return abort('403');
            }
        }

    }
}
