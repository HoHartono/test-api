<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Agents extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'agents';
    
}