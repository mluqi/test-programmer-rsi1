<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todos extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='todos';
    protected $primary_key='id';
}
