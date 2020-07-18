<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = 'room_types';
    protected $fillable = ['name'];

    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }

    public function price()
    {
        return $this->hasOne('App\Models\Price', 'room_type_id');
    }
}
