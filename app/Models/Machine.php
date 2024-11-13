<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    protected $fillable = [
        'machine_name', 'manufactured_date', 'brand', 'model', 
        'power_rating', 'rpm', 'description', 'manufacturing_address_id'
    ];

    public function manufacturingAddress()
    {
        return $this->belongsTo(ManufacturingAddress::class);
    }
}
    

