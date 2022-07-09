<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Markets extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'markets';
    
}