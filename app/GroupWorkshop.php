<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupWorkshop extends Model {

	protected $table = 'group_workshop';

	protected $primaryKey = 'ga_id';

	protected $fillable = ["assignment_id", "user_id", "added_by_id"];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships
	public function metas()
	{
		$this->hasMany('App\GroupWorkshotMeta','ga_id','ga_id');
	}
}
