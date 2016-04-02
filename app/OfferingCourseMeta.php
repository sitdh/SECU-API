<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferingCourseMeta extends Model {

	protected $table = "offering_course_meta";

	protected $primaryKey = "oc_meta_id";

	protected $fillable = ["offering_course_id", "oc_metakey", "oc_metavalue"];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	public function offeringCourse()
	{
		return $this->belongsTo("App\OfferingCourse", "offering_course_id", "offering_course_id");
	}


}
