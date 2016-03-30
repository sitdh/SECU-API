<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjectMapping extends Model {

	protected $table = "object_mapping"; // ชื่อตาราง 

	protected $primaryKey = "object_mapping_id"; // Primary Key

	protected $fillable = ["object_id", "object_type"];  

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	public function metas()
	{
		//return $this->hasMany("App\CourseMeta", "course_id", "course_id"); // ตารางที่เราจะเชื่อมด้วย แบบ one-to-many 
	}


}
