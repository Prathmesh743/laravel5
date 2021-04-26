<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
       protected $fillable= ['title','task'];

       protected $casts = [
        'task' => 'array',
    ];
}
