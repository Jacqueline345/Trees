<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Iluminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    protected $table="usuarios";
    protected $primaryKey="id";
    protected $fillable = [
        'name', 'lastname', 'phone_number', 'username', 'address', 'country', 'password'
    ];
    
    public $timestamps = false;
}
