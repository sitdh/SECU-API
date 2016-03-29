<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class studying_result extends Model
{
	protected $table = 'studying_result';
	protected $fillable = array('user_id', 'course_enroll_id', 'score','grade','update_timestamp','last_update');
}
