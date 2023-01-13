<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssignClass;
use App\Models\Student;

class StudentAssignClass extends Model
{
    use HasFactory;

    protected $guarderd = ['id'];

    /**
     * relationship beetween Student and Student Assign Class
     *
     * @return Relationship
     * 
     */
    public function student(){
        return $this->belongsTo(Student::class);
    }

    /**
     * relationship beetween Assign Class and Student Assign Class
     *
     * @return Relationship
     * 
     */
    public function assign_class(){
        return $this->belongsTo(AssignClass::class);
    }
}
