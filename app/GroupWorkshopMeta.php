<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupWorkshopMeta extends Model {

	protected $fillable = ['ga_id','ga_metakey','ga_metavalue'];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships

}
