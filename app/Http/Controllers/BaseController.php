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
                $recipeCounts = $user->recipes()->count();
                View::share('user', $user);
                View::share('recipeCounts', $recipeCounts);
            }

            return $next($request);
        });
    }
}
