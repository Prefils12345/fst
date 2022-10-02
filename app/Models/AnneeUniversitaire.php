<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneeUniversitaire extends Model
{
    use HasFactory;
    protected $table = "tr_anneeuniv";
    protected $primaryKey = "id";
    public $incrementing = false;
    protected $guarded = [];
    public $timestamps = false;
}
