<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    protected $table="categorys";

    protected $primaryKey = 'id';

    protected $fillable = ['category'];
}
