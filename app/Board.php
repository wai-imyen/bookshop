<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table="boards";

    protected $primaryKey = "id";

    protected $fillable = ['messager','subject','content','reply'];
}
