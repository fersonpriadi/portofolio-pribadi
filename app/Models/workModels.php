<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workModels extends Model
{
    use HasFactory;
    protected $table = 'work';
    public $timestamps = false;
    protected $guarded=['id'];
}
