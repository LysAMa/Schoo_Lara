<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Table Name
    protected $table = 'projects';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    // Mass assignment - fillable 
    protected $fillable = ['name', 'code', 'description', 'nbrBeneficiaire', 'zone', 'user_id'];
}