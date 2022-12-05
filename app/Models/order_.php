<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_ extends Model
{
    use HasFactory;

    protected $table ="order_";
    protected $fillable=["user_id","total_price"];
    public $timestamps=false;


    public function User()
    {
     return $this->belongsTo(User::class,$foriegnkey='user_id');
    }

}
