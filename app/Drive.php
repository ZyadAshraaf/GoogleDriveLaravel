<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
    protected $table="drives";
    protected $fillable=["tile","description","file"];
}
