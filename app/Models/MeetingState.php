<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeetingState extends Model
{
    const ACTIVE = 'Active';
    const CANCELLED = 'Cancelled';
    CONST REALIZED = 'Realized';
}
