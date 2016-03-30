<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model {

	protected $table = "feedback"; // ชื่อตาราง 

	protected $primaryKey = "feedback_id"; // Primary Key

	protected $fillable = ["feedback_object_id", "user_id", "feedback_message", "replay_id", "feedback_timestamp", "previous_feedback_id"];  

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	public function metas()
	{
		return $this->hasMany("App\FeedbackMeta", "feedback_id", "feedback_id"); // ตารางที่เราจะเชื่อมด้วย แบบ one-to-many 
	}


}
