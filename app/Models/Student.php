<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'courseId',
        'created_at',
        'classroom',
        'teacher'
    ];
}
