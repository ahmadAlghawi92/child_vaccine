<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\vaccine;
class visit extends Model
{
     protected $fillable = ['id' , 'visit_name' ,'age_of_child'] ;

    public function vaccines()
    {
        return $this->belongsToMany(vaccine::class, 'vaccines_visits');
    }

}
