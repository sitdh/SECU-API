<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignmentProject extends Model {

	protected $table = 'assignment_project';

	protected $fillable = ['group_owner_id','project_name','project_repo_id','project_location','project_description','project_creation'];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];
	// Relationships

}
