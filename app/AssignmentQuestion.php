<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignmentQuestion extends Model {

    protected $table = "assignment_question"; // ชื่อตาราง 

    protected $primaryKey = "aq_id"; // Primary Key

    protected $fillable = ["question_name", "guideline", "example", "initial_code", "language"];  

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    public function metas()
    {
        return $this->hasMany("App\AssignmentTestcase", "aq_id", "aq_id"); // ตารางที่เราจะเชื่อมด้วย แบบ one-to-many 
    }


}
