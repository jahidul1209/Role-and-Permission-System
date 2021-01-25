<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientEntry extends Model
{
       use HasFactory;
    protected $table = 'client_entrys';
      protected $fillable = [
        'client_name','organization','address','area','phone','requirement','level','office_phone','comment','status',

    ];
}
