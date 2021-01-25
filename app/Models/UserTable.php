<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTable extends Model
{
    use HasFactory;
     protected $table = 'usertables';
      protected $fillable = [
        'name','username','email','phone','type','team_name','status','password',
    ];
}
