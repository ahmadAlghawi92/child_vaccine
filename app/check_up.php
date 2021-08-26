<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class check_up extends Model
{
    protected $fillable = ['id','height','weight','blood_test','IHC','blood_test_date','check_up_date' , 'child_id'];
    public function check(){
        return $this->belongsTo(child::class);

    }

}
