<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;
    protected $table = "tr_pays";
    public $tamestamps= false;
    protected $guarded = [];
    protected $primaryKey="id";
    public $incrementing = false;
}
