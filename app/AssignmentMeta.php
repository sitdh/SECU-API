<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignmentMeta extends Model {

	protected $table = 'assignment_meta';

	protected $fillable = ['assignment_id','assignment_meta_key','assignment_metavalue'];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships
	public function assignment()
	{
		return $this->belongTo("App\Assignment", "assignment_id" , "assignment_id");
	}
}
