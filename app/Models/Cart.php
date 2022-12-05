<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table ="carts";
    protected $fillable=["quantity","product_id","user_id","startdate","returndate","price","total"];
    public $timestamps=false;

    public function user()
    {
     return $this->belongsTo(User::class,$foriegnkey='user_id');
    }

    public function product()
    {
    // dd("hhhhhhhhhh");
     return $this->belongsTo(product::class);
    }


}
