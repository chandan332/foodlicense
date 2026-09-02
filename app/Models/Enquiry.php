<?php

namespace App\Models;

use App\Enums\ServiceType;
use App\Enums\EnquiryStatus;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'service',
        'full_name',
        'mobile_number',
        'state',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'service' => ServiceType::class,
            'status' => EnquiryStatus::class,
        ];
    }
}
