<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'profession',
        'company',
        'linkedin_url',
        'status'
    ];
}
