<?php
  
namespace App\Http\Controllers;
  
use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
class CourseController extends Controller {
    public function index(){
        $courses  = Course::all();

        return response()->json($courses); 
    }
  
    public function getCourse($id){
        $course  = Course::find($id);

        return response()->json($course);
    }
  
    public function createCourse(Request $request){
        $course = Course::create($request->all());

        return response()->json($course);
    }
  
    public function deleteCourse($id){
        $course  = Course::find($id);
        $course->delete();
 
        return response()->json('deleted');
    }
  
    public function updateCourse(Request $request, $id){
        $course  = Course::find($id);
        
        // Set new attribute
        $course->course_number = $request->input('course_number');
        $course->course_name = $request->input('course_name');
        $course->course_description = $request->input('course_description');

        $course->save();
  
        return response()->json($course);
    }
}