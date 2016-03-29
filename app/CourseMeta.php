<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseMeta extends Model {

	protected $table = "course_meta";

	protected $primaryKey = "course_meta_id";

	protected $fillable = ["course_id", "course_metakey", "course_metavalue"];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	public function course()
	{
		return $this->belongsTo("App\Course", "course_id", "course_id"); // ตารางที่เราจะเชื่อมด้วย แบบ many-to-one 
	}


}
