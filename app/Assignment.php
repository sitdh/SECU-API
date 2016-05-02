<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model {

	protected $table = 'assignment';

	protected $primaryKey = "assignment_id";

	protected $fillable = ["offering_course_id", "assignment_number", "assignment_name", "assignment_description", "assignment_type"];

	protected $dates = ["assignment_date", "pulbic_assignment"];

	public static $rules = [
		// Validation rules
	];

	/* Reletion */
	public function OfferingCourse()
	{
		return $this->belongsTo("App\OfferingCourse", "offering_course_id", "offering_course_id");
	}
	
	public function metas()
	{
		$this->hasMany('App\AssignmentMeta','assignment_id','assignment_id');
	}
}
