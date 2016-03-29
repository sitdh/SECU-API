<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class course_enroll extends Model
{
	protected $table = 'course_enroll';
	protected $fillable = array('user_id', 'offering_course_id', 'enroll_timestamp');
}
