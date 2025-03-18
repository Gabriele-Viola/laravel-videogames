<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // return 'hi';
        return view('admin.dashboard', ['user' => $user]);
    }
}
