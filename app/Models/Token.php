<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
   protected $fillable = [
    'id',
    'token',
    'user_id'
   ];

   public static function boot()
    {
    parent::boot();

    static::creating(function ($model) {

        $model->token = hash('sha256',random_bytes(20));
    });
    }


}
