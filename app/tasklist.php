<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasklist extends Model
{
     protected $fillable = ['content', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
