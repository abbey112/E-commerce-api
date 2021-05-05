<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
   public function Transactions() {

   return $this->hasMany(Transaction::class);

   }
}
