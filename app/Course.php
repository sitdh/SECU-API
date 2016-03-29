<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	protected $table = "course"; // ชื่อตาราง 

	protected $primaryKey = "course_id"; // Primary Key

	protected $fillable = ["course_number", "course_name", "course_description"];  

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	public function metas()
	{
		return $this->hasMany("App\CourseMeta", "course_id", "course_id"); // ตารางที่เราจะเชื่อมด้วย แบบ one-to-many 
	}


}
