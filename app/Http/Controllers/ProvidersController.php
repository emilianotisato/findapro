<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index()
    {
        $providers = Provider::all();
        
        return view('admin.providers.index', [
            'providers' => $providers
        ]);        
    }
}
