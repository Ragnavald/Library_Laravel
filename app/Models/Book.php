<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'author',
        'gender_id',
        'barcode',
        'supplier_id',
        'qty',
        'img',
        'isbn',
        'realease_date'
       ];
}
