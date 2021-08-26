<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    protected $fillable = ['name','gender','date_of_birth','n_id', 'visit_id' , 'user_id'];
    public function visit(){

return $this->hasOne(visit::class);
    }
    public function user(){
        return $this->belongsTo(User::class);

    }
    public function check_up(){
        return $this->hasMany(check_up::class);

    }

}
