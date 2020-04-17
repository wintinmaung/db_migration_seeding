<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Userinfo extends Model
{
    use SoftDeletes;
    protected $table = 'userinfo';
    protected $dates = ['deleted_at'];
}
