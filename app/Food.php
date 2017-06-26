<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $Fillable = ['name', 'protein', 'carbohydrates', 'fat'];
    public function meal(){
    	return this->belongsTo(Meal::class);
    }
}
