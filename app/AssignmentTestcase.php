<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignmentTestcase extends Model {

    protected $table = "assignment_testcase"; // ชื่อตาราง 

    protected $primaryKey = "atc_id"; // Primary Key

    protected $fillable = ["aq_id", "testcase_number", "testcase_objective", "testcase_content"];  

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    public function metas()
    {
        return $this->hasMany("App\AssignmentQuestion", "aq_id", "aq_id"); // ตารางที่เราจะเชื่อมด้วย แบบ one-to-many 
    }


}
