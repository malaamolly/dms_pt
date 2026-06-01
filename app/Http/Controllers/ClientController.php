<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
{
    $clients = Client::all();

    return view('clients.index', compact('clients'));
}
    public function create()
    {
        return view('clients.create');
    }
    public function show(Client $client)
{
    return view('clients.show', compact('client'));
}

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'company_type' => 'required'
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')
            ->with('success', 'Client berhasil ditambahkan');
    }

   

    public function edit(Client $client)
{
    return view('clients.edit', compact('client'));
}

public function update(Request $request, Client $client)
{
    $request->validate([
        'client_name' => 'required',
        'company_type' => 'required',
        'phone' => 'required',
        'address' => 'required',
    ]);

    $client->update([
        'client_name' => $request->client_name,
        'company_type' => $request->company_type,
        'phone' => $request->phone,
        'address' => $request->address,
    ]);

    return redirect()->route('clients.index')
        ->with('success', 'Client berhasil diupdate');
}

public function destroy(Client $client)
{
    $client->delete();

    return redirect()->route('clients.index')
        ->with('success', 'Client berhasil dihapus');
}
    
}

