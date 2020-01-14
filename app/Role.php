<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Role extends Model
{
   protected $guarded = [];

   public function user()
   {
      return $this->hasMany(User::class);
   }
}
