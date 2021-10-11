<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);    
    }

    public function index()
    {
        // $user = auth()->user();

        // Mail::to($user)->send(new PostLiked());

        return view('dashboard');
    }
}
