<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    use HasFactory;

    protected $table ="order_item";
    protected $fillable=["product_id","order_id","number","rent_date","return_date","price"];
    public $timestamps=false;

    public function order_()
    {
     return $this->belongsTo(order_::class,$foriegnkey='order_id');
    }

    public function product()
    {
     return $this->belongsTo(product::class,$foriegnkey='product_id');
    }


}
