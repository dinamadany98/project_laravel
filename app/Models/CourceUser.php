<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourceUser extends Model
{
    use HasFactory;
    protected $fillable =['user_id','cource_id'];
    protected $table ="cource_users";
}
