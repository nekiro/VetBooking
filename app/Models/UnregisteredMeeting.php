<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnregisteredMeeting extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'date',
        'firstname',
        'lastname',
        'phone_number',
        'petname',
    ];
}
