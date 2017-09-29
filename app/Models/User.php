<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Uuids;
class User extends Authenticatable
{
    protected $table = 'users';

    public $incrementing = false;
}
