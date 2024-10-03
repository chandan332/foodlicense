<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Client extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'client_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'state',
        'message',
    ];
}
