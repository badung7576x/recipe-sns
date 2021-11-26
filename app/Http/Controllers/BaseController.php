<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(auth()->check()) {
                $user = auth()->user();
                View::share('user', $user);
            }

            return $next($request);
        });
    }
}
