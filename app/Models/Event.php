<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'event';


    public function users(){
        return $this->belongsToMany(User::class);
    }

    //Liaison avec type plusieur à un

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
