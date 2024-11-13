<?php

namespace App\Http\Controllers;

use App\Models\Machine1;
use Illuminate\Http\Request;

class Machine1Controller extends Controller
{
    // Display a listing of machines
    public function index()
    {
        $machines = Machine1::with('manufacturingAddress')->get();
        return response()->json($machines);
    }

    // Fetch a specific machine by ID, with its manufacturing address
    public function show($id)
    {
        $machine = Machine1::with('manufacturingAddress')->findOrFail($id);
        return response()->json($machine);
    }


    // Store a newly created machine
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'machine_name' => 'required|string',
            'manufactured_date' => 'required|date',
            'brand' => 'required|string',
            'model' => 'required|string',
            'power_rating' => 'required|integer',
            'rpm' => 'required|integer',
            'description' => 'nullable|string',
            'manufacturing_address_id' => 'required|exists:manufacturing_addresses,id',
        ]);

        $machine = Machine1::create($validatedData);
        return response()->json($machine, 201);
    }

    // Display the specified machine
    // public function show($id)
    // {
    //     $machine = Machine1::findOrFail($id);
    //     return response()->json($machine);
    // }

    // Update the specified machine
    public function update(Request $request, $id)
    {
        $machine = Machine1::findOrFail($id);

        $validatedData = $request->validate([
            'machine_name' => 'required|string',
            'manufactured_date' => 'required|date',
            'brand' => 'required|string',
            'model' => 'required|string',
            'power_rating' => 'required|integer',
            'rpm' => 'required|integer',
            'description' => 'nullable|string',
            'manufacturing_address_id' => 'required|exists:manufacturing_addresses,id',
        ]);

        $machine->update($validatedData);
        return response()->json($machine);
    }

    // Remove the specified machine
    public function destroy($id)
    {
        $machine = Machine1::findOrFail($id);
        $machine->delete();

        return response()->json(['message' => 'Machine deleted successfully']);
    }
}
