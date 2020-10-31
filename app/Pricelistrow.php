<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricelistrow extends Model
{
  // Fillable columns
  protected $fillable = [
    "hotel_id",
    "month",
    "price"
  ];

  // Pricelistrow belongs to one Hotel
  public function hotel() {
    return $this->belongsTo("App\Hotel");
  }
}
