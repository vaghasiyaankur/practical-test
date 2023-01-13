<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentAssignClass;

class Student extends Model
{
    use HasFactory;

    protected $guarderd = ['id'];

    /**
     * relationship beetween Student and Student Assign Class
     *
     * @return Relationship
     * 
     */
    public function student_assign_class(){
        return $this->hasMany(StudentAssignClass::class);
    }
}
