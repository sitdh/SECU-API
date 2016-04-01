<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignmentMeta extends Model {

	protected $fillable = ['assignment_id','assignment_meta_key','assignment_metavalue'];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships

}
