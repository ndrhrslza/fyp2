<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_path',
        'file_name',
        'chapter',
        'course',
        'category',
    ];
}
