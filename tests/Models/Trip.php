<?php

namespace Tightenco\Parental\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Tightenco\Parental\HasChildren;

class Trip extends Model
{
    use HasChildren;

    protected $childColumn = 'trip_type';

    protected $guarded = [];

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class);
    }

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
