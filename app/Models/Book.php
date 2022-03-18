<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table = 'books';
    public $timestamps = true;
    protected $fillable = array('name','description', 'image', 'category_id');

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

  
}