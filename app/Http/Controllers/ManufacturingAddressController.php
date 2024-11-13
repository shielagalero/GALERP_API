<?php 

namespace App\Http\Controllers;

use App\Models\Machine1;
use Illuminate\Http\Request;
use App\Models\ManufacturingAddress;

class ManufacturingAddressController extends Controller
{
    // Store method to create a new manufacturing address
    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'block_street_village' => 'nullable|string|max:255',
        'region' => 'required|string|max:255',
        'district' => 'nullable|string|max:255',
        'barangay' => 'nullable|string|max:255',
    ]);

    // Create a new manufacturing address using the validated data
    $address = ManufacturingAddress::create($request->only([
        'block_street_village', 'region', 'district', 'barangay'
    ]));

    // Return the created address in JSON format
    return response()->json($address, 201);
}

    // Index method to retrieve all manufacturing addresses
    public function index(Request $request)
    {
        // Retrieve all manufacturing addresses
        $addresses = ManufacturingAddress::all();

        // Return the addresses in JSON format
        return response()->json($addresses);
    }

    // Show method (if needed) to retrieve a single manufacturing address by ID
    public function show($id)
{
    // Find the manufacturing address by ID
    $address = ManufacturingAddress::findOrFail($id);

    // Return the address in JSON format
    return response()->json($address);
    }

    // Update method to modify an existing manufacturing address
    public function update(Request $request, $id)
{
    // Find the manufacturing address by ID
    $address = ManufacturingAddress::findOrFail($id);

    // Validate the request data
    $validated = $request->validate([
        'block_street_village' => 'nullable|string|max:255',
        'region' => 'required|string|max:255',
        'district' => 'nullable|string|max:255',
        'barangay' => 'nullable|string|max:255',
    ]);

    // Update the record with the validated data
    $address->update($validated);

    // Return a response
    return response()->json([
        'message' => 'Address updated successfully',
        'data' => $address
    ]);
}
public function destroy($id)
{
    $address = ManufacturingAddress::find($id);

    if (!$address) {
        return response()->json(['message' => 'Address not found'], 404);
    }

    $address->delete();

    return response()->json(['message' => 'Manufacturing Address deleted successfully'], 200);
}
public function machines()
    {
        return $this->hasMany(Machine1::class);
    }

}




