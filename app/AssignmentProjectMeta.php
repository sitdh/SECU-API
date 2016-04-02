<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignmentProjectMeta extends Model {

	protected $table = 'assignment_project_meta';

	protected $fillable = ['assproj_id','assproj_metakey','assproj_metavalue','assignment_project_col','assignment_project_metacol'];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships
	public function assignment_project()
	{
		return $this->belongTo("App\AssignmentProject", "assproj_id" , "assproj_id");
	}
}
