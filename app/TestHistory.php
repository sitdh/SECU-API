<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TestHistory extends Model {

	protected $table = 'test_history';

	protected $fillable = ["assignment_proj_id", "test_result", "test_log_location"];

	protected $dates = ["test_start", "compile_done"];

	public static $rules = [
		// Validation rules
	];

	// Relationships

}
