<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProvidersController extends Controller
{
    public function index()
    {
        return view('admin.providers.index', [
            'providers' => Provider::latest()->paginate(10)
        ]);        
    }

    public function create()
    {
        return view('admin.providers.create');
    }

    public function store(Request $request)
    {
        Provider::create([
            'name'=> $request->input('name'),
            'contact_name'=> $request->input('contact_name'),
            'contact_phone'=> $request->input('contact_phone'),
            'contact_email'=> $request->input('contact_email')
            
        ]);

        //Provider::create($request->all());
        return redirect('/admin/providers')->with('success', 'Provider created successfully??');
    }

    public function edit($id)
    {
        $provider = Provider::findOrFail($id);
        return view ('admin/provider/edit',compact($provider));
    }
}


