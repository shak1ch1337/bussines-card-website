<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    public $timestamps = false;

    protected $fillable = [
        "soc_title" => "required",
        "link" => "required",
        "icon" => "required"
    ];
}
