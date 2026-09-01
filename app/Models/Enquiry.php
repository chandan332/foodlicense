<?php

namespace App\Models;

use App\Enums\ServiceType;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'service',
        'full_name',
        'mobile_number',
        'state',
    ];

    protected function casts(): array
    {
        return [
            'service' => ServiceType::class,
        ];
    }
}
