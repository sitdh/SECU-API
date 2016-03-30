<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model {

    protected $table = "user_meta"; // ชื่อตาราง 

    protected $primaryKey = "user_meta_id"; // Primary Key

    protected $fillable = ["user_id", "user_metakey", "user_metavalue"];  

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    public function metas()
    {
        return $this->hasMany("App\User", "user_id", "user_id"); // ตารางที่เราจะเชื่อมด้วย แบบ one-to-many 
    }


}
