<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignmentProjectMeta extends Model {

	protected $fillable = ['assproj_id','assproj_metakey','assproj_metavalue','assignment_project_col','assignment_project_metacol'];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships

}
