<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Student;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class Part1Controller extends Controller
{
    /**
     * SQL query to show data with ID -> 4,5,6,7 and 8 out of 10 
     * without using 'where' clause.
     * 
     * @return view
     * 
     */
    public function practical1()
    {
        $posts = Post::having('id', '>', 3)->having('id', '<', 9)->get();
        return view('part1.practical1', compact('posts'));
    }

    /**
     * SQL Query to Count the total posts where more than 2 comments exist
     * 
     * @return view
     * 
     */
    public function practical2()
    {
        $posts = Post::with('post_comments')->withCount('post_comments')->having('post_comments_count', '>', 2)->get();
        return view('part1.practical2', compact('posts'));
    }

    /**
     * Write SQL Query to get information of Student where student is not
     * assigned to any class.
     * 
     * @return view
     * 
     */
    public function practical3()
    {
        $students = Student::whereDoesntHave('student_assign_class')->get();
        return view('part1.practical3', compact('students'));
    }

    /**
     * Write SQL Query to get information of Student where student is not
     * assigned to any class.
     * 
     * @return view
     * 
     */
    public function practical4()
    {
        $customers = DB::table('customers')->leftJoin('orders', 'customers.id', '=', 'orders.customer_id')->select('customers.id', 'customers.name','orders.amount','orders.date')->get();

        return view('part1.practical4', compact('customers'));
    }
}
