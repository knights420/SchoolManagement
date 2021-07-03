<?php

namespace App\Http\Traits;

trait SetRouteKeyTrait
{
    public function getRouteKeyName()
    {
        return 'uuid';
    }
}