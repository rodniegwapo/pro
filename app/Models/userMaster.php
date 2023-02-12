<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userMaster extends Model
{
    protected $table = 'userMaster';
    protected $primaryKey = 'pk_userId';
    public $timestamps = false;
}
