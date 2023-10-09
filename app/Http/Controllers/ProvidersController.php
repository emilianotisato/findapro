<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProvidersController extends Controller
{
    public function index()
    {
       
        $providers = Provider::all();


        return view('admin.providers.index', [
            'providers' => $providers
        ]);        
    }

    public function create()
    {
        return view('admin.providers.create.createproviderform');
    }

    public function store(Request $request)
    {
        Provider::create($request->all());

        return redirect('/admin/providers')->with('success', 'Provider created successfully');
    }
}


