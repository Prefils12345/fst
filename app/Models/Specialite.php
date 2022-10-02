<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;
    protected $table = "t_specialite";
    public $tamestamps= false;
    protected $guarded = [];
    protected $primaryKey="id";
    public $incrementing = false;
}
