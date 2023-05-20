<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class novels extends Model
{
    use HasFactory;

    protected $table = 'novels';
    protected $primaryKey = 'idnovels';

    public $incrementing = false;
    public $timestamps = true;
}
