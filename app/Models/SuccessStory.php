<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'story',
        'member_id'
    ];
}
