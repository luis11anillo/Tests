<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeClienteRequest;
use App\Models\Cliente;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClienteController extends Controller
{
    public function index(Request $request): View
    {

        $busqueda = $request->input('search');

        $clientes = Cliente::query();

        if ($busqueda != null) {
            $clientes->where('name', 'LIKE', '%' . $busqueda . '%');
        }

        $clientes = $clientes->get();

        return view('view_clientes.index', compact('clientes'));
    }

    public function create(): View
    {
        return view('view_clientes.create');
    }

    public function store(storeClienteRequest $request): RedirectResponse
    {
        try {
            //Validate
            $data = $request->validated();

            //Create
            Cliente::create([
                'CC' => $data['CC'],
                'name' => $data['name'],
                'birthday' => $data['birthday'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'city' => $data['city'],
                'email' => $data['email'],
                'status' => $data['status'],
            ]);

            return redirect()->route('cliente.index')->with('success', 'Client created successfully');

        } catch (\Throwable $e) {
            Log::error('Error in store CLienteController', [$e->getMessage()]);
            abort(500, 'Ocurrió un error al guardar el registro.');
        }
    }

    public function edit($id): View
    {
        // Find by id
        $client = Cliente::find($id);

        return view('view_clientes.edit', compact('client'));
    }

    public function update(storeClienteRequest $request, $id): RedirectResponse
    {
        try {

            //Validate
            $data = $request->validated();

            $client = Cliente::find($id);

            //Update
            $client->update($data);

            return redirect()->route('cliente.index', $client)->with('success', 'Client updated successfully');

        } catch (\Throwable $e) {
            Log::error('Error in update CLienteController', [$e->getMessage()]);
            abort(500, 'Ocurrió un error al actualizar el registro.');
        }
    }

    public function show($id): view
    {
        // Find by id
        $client = Cliente::find($id);
        
        return view('view_clientes.show', compact('client'));
    }

    public function destroy($id): RedirectResponse
    {
        try {

            $client = Cliente::find($id);

            if (!$client) {
                abort(404, 'Registro no encontrado');
            }

            $client->delete();

            // Success message
            //session()->flash('success', 'Client deleted successfully');

            return redirect()->route('cliente.index')->with('success', 'Client deleted successfully');

        } catch (\Throwable $e) {
            log::error('Error in Destroy ClienteController', [$e->getMessage()]);
            abort(500, 'Ocurrió un error al Eliminar el registro.');
        }
    }
}
