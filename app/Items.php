<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
     protected $table = 'Items';
     protected $connection = 'mysql_stock';
     public $timestamps = false;
}
