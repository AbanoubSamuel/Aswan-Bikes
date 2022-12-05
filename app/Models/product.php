<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table ="product";
   protected $fillable=["sport_id","type_id","size","COLOR","img","describe","name"];
   public $timestamps=false;

   public function sport()
   {
    return $this->belongsTo(sport::class);
   }

   public function type()
   {
    return $this->belongsTo(type::class);
   }

   public function product()
   {
    return $this->hasMany(Cart::class);
   }
}
