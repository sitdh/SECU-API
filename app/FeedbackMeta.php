<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackMeta extends Model {

	protected $table = "feedback"; // ชื่อตาราง 

	protected $primaryKey = "feedback_meta_id"; // Primary Key

	protected $fillable = ["feedback_id", "feedback_metakey", "feedback_metavalue"];  

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	public function metas()
	{
		return $this->hasMany("App\Feedback", "feedback_id", "feedback_id"); // ตารางที่เราจะเชื่อมด้วย แบบ one-to-many 
	}


}
