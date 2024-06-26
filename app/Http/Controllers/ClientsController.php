<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.clients-index', compact('clients'));
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.clients-show', compact('client'));
    }

    public function create()
    {
        return view('clients.clients-create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'statut' => 'required|in:Entreprise,Particulier',
            'phone_number' => 'nullable|string|max:20',
            'mail' => 'required|unique:clients,mail',
            'info' => 'nullable|string',
        ]);

        Client::create($data);
        return redirect()->route('clients.index');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.clients-edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'statut' => 'required|in:entreprise,particulier',
            'phone_number' => 'nullable|string|max:20',
            'mail' => 'required|unique:clients,mail,' . $id,
            'info' => 'nullable|string',
        ]);

        $client = Client::findOrFail($id);
        $client->update($data);
        return redirect()->route('clients.index');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('clients.index');
    }
}
