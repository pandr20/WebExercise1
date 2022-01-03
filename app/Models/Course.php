<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';




        protected $fillable = [
        'id', 'department_id', 'name', 'ects', 'code', 'description'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
        //return $this->belongsTo(Department::class);
    }

}
