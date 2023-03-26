<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class Employee extends Model implements Authenticatable
{
    use AuthenticableTrait;
    // use HasFactory;
    protected $table = 'Employee';
    protected $primaryKey = 'Employee';
    protected $guarded = [];
}
