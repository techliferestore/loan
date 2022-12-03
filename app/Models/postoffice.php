<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postoffice extends Model
{
        use HasFactory;
    public $table="pincode";
    protected $guarded = [
        'id',
        'updated_at',
        'Pincode',
        'City',
        'District',
    ];

}
