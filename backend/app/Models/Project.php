<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false;

    protected $fillable =[
        "title",
        "description",
        "link_project",
        "link_github",
        "created_at"
    ];
}
