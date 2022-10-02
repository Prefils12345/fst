<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    use HasFactory;
    protected $table = "tr_ue";
    public $tamestamps= false;
    protected $guarded = [];
    protected $primaryKey="id";
    public $incrementing = false;
}
