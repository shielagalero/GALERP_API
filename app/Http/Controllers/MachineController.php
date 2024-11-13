<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    // Store a new machine
    public function store(Request $request)
    {
        // Validate the incoming request data
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

        // Create the new machine
        $machine = Machine::create($validatedData);

        // Return the newly created machine
        return response()->json($machine, 201);
    }

    // Update an existing machine
    public function update(Request $request, $id)
    {
        // Find the machine by ID
        $machine = Machine::findOrFail($id);

        // Validate the incoming request data
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

        // Update the machine data
        $machine->update($validatedData);

        // Return the updated machine
        return response()->json($machine, 200);
    }

    // Show a specific machine by ID
    public function show($id)
    {
        // Find the machine by ID
        $machine = Machine::findOrFail($id);

        // Return the machine details
        return response()->json($machine, 200);
    }

    // Delete a machine by ID
    public function destroy($id)
    {
        // Find the machine by ID
        $machine = Machine::findOrFail($id);

        // Delete the machine
        $machine->delete();

        // Return a success message
        return response()->json(['message' => 'Machine deleted successfully'], 200);
    }
}
