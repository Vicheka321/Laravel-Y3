<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table = 'tbl_customer'; //<-- 1. important: table name
    protected $primaryKey = 'cid'; // <-- 2. important
    protected $keyType = 'int';
    public $incrementing = true; // <-- 3. incrementing = true
    public $timestamps = false; // <--4. important: $timestamps = false

}
