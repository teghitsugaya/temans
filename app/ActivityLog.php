<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $guarded = [];
    protected $table ="activity_log";

    public function user()
    {
        return $this->belongsTo('App\User', 'causer_id');
    }
}
