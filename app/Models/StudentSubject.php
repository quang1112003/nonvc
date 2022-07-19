<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    use HasFactory;
    protected $table = 'student_subjects';
    protected $fillable = [
        'sid',
        'sbid',
        'created_at',
        'updated_at'
    ];
}
