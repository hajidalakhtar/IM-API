<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemMaster extends Model
{
    protected $table = 'Master_Items';
    protected $connection = 'mysql_stock';
    public $timestamps = false;
}
