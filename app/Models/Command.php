<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;

    protected $fillable =

    [
        "operating_system_id",
        "platform_id",
        "command",
        "description",
    ];

    function operatingSystem()
    {
        return $this->belongsTo(OperatingSystem::class, "operating_system_id");
    }

    function platform()
    {
        return $this->belongsTo(Platform::class);
    }
}
