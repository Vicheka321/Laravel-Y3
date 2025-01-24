<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'tbl_product'; // 1. important: table name
    protected $primaryKey = 'pid'; // 2. important: pid
    protected $keyType = 'int';
    public $incrementing = true; // 3. incrementing = true
    public $timestamps = false; // 4. important: $timestamps = false
}
