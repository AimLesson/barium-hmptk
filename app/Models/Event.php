<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Define the table associated with the model (optional if it follows Laravel's naming convention)
    protected $table = 'events';

    // Specify the fillable attributes for mass assignment
    protected $fillable = [
        'pamflet',
        'title',
        'date',
        'price',
        'link_info',
        'link_reg',
        'keterangan',
    ];

    // Optionally, if you need to cast attributes to specific data types
    protected $casts = [
        'date' => 'date',
        'price' => 'decimal:2'
    ];
}
