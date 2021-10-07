<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['title','salary','pic','desc','enabled'];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d m:i:s',
        'updated_at' => 'datetime:Y-m-d m:i:s',
    ];
}
