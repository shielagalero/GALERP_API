<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManufacturingAddress;

class ManufacturingAddressSeeder extends Seeder
{
    public function run()
    {
        // Insert sample data
        ManufacturingAddress::create([
            'block_street_village' => '123 Example St',
            'region' => 'Region 1',
            'district' => 'District A',
            'barangay' => 'Barangay X'
        ]);

        // Add more sample data if needed
        ManufacturingAddress::create([
            'block_street_village' => '456 Another St',
            'region' => 'Region 2',
            'district' => 'District B',
            'barangay' => 'Barangay Y'
        ]);
    }
}
