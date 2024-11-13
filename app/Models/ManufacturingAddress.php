<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManufacturingAddress extends Model
{
    use HasFactory;
    public function machines()
    {
        return $this->hasMany(Machine1::class);
    }
    protected $fillable = [
        
            'block_street_village',
            'region',
            'district',
            'barangay',
        ];
    

    
}

