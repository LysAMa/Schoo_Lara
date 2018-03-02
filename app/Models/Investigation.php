<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    // Table Name
    protected $table = 'surveys';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}