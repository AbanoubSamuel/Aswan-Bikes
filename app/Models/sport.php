<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sport extends Model
{
    use HasFactory;

    protected $table ="sport";
    protected $fillable=["name"];
    public $timestamps=false;

    
}
