<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

     
    protected $primaryKey = 'id';




        protected $fillable = [
        'id', 'name', 'courses', 'code'
    ];
    public function course()
    {
        return $this->hasMany(Course::class);
    }

    use HasFactory;
}
