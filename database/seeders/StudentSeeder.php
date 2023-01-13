<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\AssignClass;
use App\Models\StudentAssignClass;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            $post = new Student();
            $post->name = 'student '.($i + 1);
            $post->save();
        }

        for($i=0; $i<6; $i++){
            $assign_class = new AssignClass();
            $assign_class->name = 'class '.($i + 1);
            $assign_class->save();

            $student_assign_class = new StudentAssignClass();
            $student_assign_class->student_id = rand(1, 10);
            $student_assign_class->assign_class_id =  $assign_class->id;
            $student_assign_class->save();
        }
        


    }
}
