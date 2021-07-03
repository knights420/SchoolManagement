<?php

namespace App\Models;

use App\Http\Traits\UuidTrait;
use App\Http\Traits\SetRouteKeyTrait;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use UuidTrait,SetRouteKeyTrait;
    
    protected $fillable = [
        'uuid','name','description','image'
    ];
}
