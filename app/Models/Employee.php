<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastName',
        'company',
        'email',
        'phone',
    ];

    public function company(){
        return $this->belongsTo(company::class);
    }
}
