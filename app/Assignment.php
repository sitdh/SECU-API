<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model {

	protected $table = 'assignment';

	protected $fillable = ["offering_course_id", "assignment_number", "assignment_name", "assignment_description", "assignment_type"];

	protected $dates = ["assignment_date", "pulbic_assignment"];

	public static $rules = [
		// Validation rules
	];

	// Relationships

}
