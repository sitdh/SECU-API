<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Course extends Model
{
	protected $table = 'course';
	protected $fillable = array('course_number', 'course_name', 'course_description');
}
