<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Machine1 extends Model
{
    use HasFactory;
    Public function manufacturingAddress()
    {
        // Machine1 belongs to a ManufacturingAddress
        return $this->belongsTo(ManufacturingAddress::class);
    }

    protected $table = 'machine1';

    protected $fillable = [
        'machine_name',
        'manufactured_date',
        'brand',
        'model',
        'power_rating',
        'rpm',
        'description',
        'manufacturing_address_id',
    ];
    
}


