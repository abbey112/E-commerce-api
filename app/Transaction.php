<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  public function Buyer()
  {
      return $this->belongTO(Buyer::class);
  }
}
