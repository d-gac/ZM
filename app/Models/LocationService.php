<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationService extends Model
{
    use HasFactory;
    protected $table = 'location_service';
    protected $guarded = [];
}
