<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model {

	protected $table = 'options';

	protected $fillable = ["option_name", "option_value"];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships

}
