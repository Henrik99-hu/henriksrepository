<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{
    protected $fillables = ['title', 'description', 'lables'];
}
