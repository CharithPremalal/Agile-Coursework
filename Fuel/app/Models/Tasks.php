<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'task',
        'isCompleted',
        'date',
        'assigned_person'
        
    ];


    public function user(){

        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
