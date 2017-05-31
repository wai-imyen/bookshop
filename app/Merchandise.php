<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $table = 'merchandises';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'content', 'author', 'price', 'category','image','publisher','date_of_publication','situation'];
}
