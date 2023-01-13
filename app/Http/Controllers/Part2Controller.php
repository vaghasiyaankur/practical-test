<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Faculty;

class Part2Controller extends Controller
{
    /**
     * To call view of subject list
     *
     * @return View
     * 
     */
    public function subjectList()
    {
        $subjects = Subject::all();
        return view('part2.subject_list', compact('subjects'));
    }

    /**
     * To call view of subject add form
     *
     * @return View
     * 
     */
    public function AddSubjectView()
    {
        return view('part2.subject_add');
    }
    
    /**
     * To add subject
     *
     * @return View
     * 
     */
    public function AddSubject(Request $request)
    {
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->term_id = $request->term_id;
        $subject->save();
        return redirect()->to('subject.list');
    }
    /**
     * To call view of faculty list
     *
     * @return View
     * 
     */
    public function facultyList()
    {
        $faculties = Faculty::all();
        return view('part2.faculty_list', compact('faculties'));
    }

    /**
     * To call view of faculty add form
     *
     * @return View
     * 
     */
    public function AddFacultyView()
    {
        return view('part2.faculty_add');
    }
    
    /**
     * To add faculty
     *
     * @return View
     * 
     */
    public function AddFaculty(Request $request)
    {
        $faculty = new Faculty();
        $faculty->name = $request->name;
        $faculty->email = $request->email;
        $faculty->save();
        return redirect()->to('faculty.list');
    }
}
