<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    // Fillable columns
    protected $fillable = [
      "name",
      "location"
    ];

    // Hotel has many Pricelistrow
    public function pricelistrows() {
      return $this->hasMany("App\Pricelistrow");
    }
}
