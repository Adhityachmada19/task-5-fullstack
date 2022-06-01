<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['user_id','name'];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function Article(){
        return $this->hasMany('App\Models\Article');
    }
    use HasFactory;
}
