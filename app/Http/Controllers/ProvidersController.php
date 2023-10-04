<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProvidersController extends Controller
{
    public function index()
    {
        if(Auth::user()->role !== 'admin') {
            abort(403);
        }
        $providers = Provider::all();


        return view('admin.providers.index', [
            'providers' => $providers
        ]);        
    }
}
