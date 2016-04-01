<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupWorkshopMeta extends Model {
	protected $table = 'group_workshop_meta';

	protected $fillable = ['ga_id','ga_metakey','ga_metavalue'];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	public function group_workshop()
	{
		return $this->belongTo("App\GroupWorkshop", "ga_id" , "ga_id");
	}

}
