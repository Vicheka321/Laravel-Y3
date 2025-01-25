<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = 'tbl_student'; //<-- 1. important: table name
    protected $primaryKey = 'student_id'; // <-- 2. important
    protected $keyType = 'int';
    public $incrementing = true; // <-- 3. incrementing = true
    public $timestamps = false; // <--4. important: $timestamps = false

}
