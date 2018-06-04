<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Item extends Model
{
    protected $fillable = [
        'iname', 'iqty'
    ];

      public function user() {
        return $this->belongsTo('App\User');
    }

}
