<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $primaryKey = 'sbid';
    protected $keyType = 'string'; //kiểu dữ liệu sbid
    protected $fillable = [
        "name",
        "created_at",
        "updated_at"
    ];
}
