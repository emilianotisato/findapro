<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\User;
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
        $request->validate([
            'name' => 'required',
            'contact_name' => 'required',
            'contact_phone' => 'required|numeric|digits:10',
            'contact_email' => 'required',
        ]);
        
        Provider::create([
            'name'=> $request->input('name'),
            'contact_name'=> $request->input('contact_name'),
            'contact_phone'=> $request->input('contact_phone'),
            'contact_email'=> $request->input('contact_email'),
        ]);

        //Provider::create($request->all());
        return redirect('/admin/providers')->with('success', 'Provider created successfully??');
    }

    public function edit($id){

        $provider = Provider::findOrFail($id);

        if (!$provider) {
          
            return redirect('/admin/providers')->with('error', 'Registro no encontrado');
        }

       
        return view('admin.providers.edit.editprovider', compact('provider'));

        
       
    }

    public function update(Request $request, $id)
    {
    
 
        $provider = Provider::findOrFail($id);

        $provider->update([
            'name'=> $request->input('name'),
            'contact_name'=> $request->input('contact_name'),
            'contact_phone'=> $request->input('contact_phone'),
            'contact_email'=> $request->input('contact_email')
        ]);

        return redirect('admin/providers')->with('success', 'Proveedor actualizado correctamente');
    }
}


