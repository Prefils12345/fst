<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;
    protected $table = "tr_domaine";
    public $tamestamps= false;
    protected $guarded = [];
    protected $primaryKey="id";
    public $incrementing = false;
}
