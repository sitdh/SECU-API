<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferingCourse extends Model {

	protected $table = "offering_course";

	protected $primaryKey = "offering_course_id";

	protected $fillable = ["course_id", "educational_year", "semester", "section"];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	public function metas()
	{
		return $this->hasMany("App\OfferingCourseMeta", "offering_course_id", "offering_course_id");
	}

	public function course()
	{
		return $this->belongsTo("App\Course", "course_id", "course_id");
	}

}
