<?php

namespace App\Models;

use App\Http\Controllers\SiteController;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected function name(): Attribute{
        return new Attribute(
            get: fn($value) =>  ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }
}
