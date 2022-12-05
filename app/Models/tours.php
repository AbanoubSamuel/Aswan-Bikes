<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tours extends Model
{
    use HasFactory;
    protected $table ="tours";
    protected $fillable=["id","category_id","img","description"];
    public $timestamps=false;

    public function category()
    {
     return $this->belongsTo(category::class,"category_id");
    }
}
