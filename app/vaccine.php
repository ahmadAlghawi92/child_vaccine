<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vaccine extends Model
{
     protected $fillable = ['name' , 'doses','description'] ;
}
