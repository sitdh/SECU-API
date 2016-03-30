<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = "user"; // ชื่อตาราง 

    protected $primaryKey = "user_id"; // Primary Key

    protected $fillable = ["user_number", "username", "password", "email", "firstname", "lastname", "token", "register_date", "last_update"];  

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    public function metas()
    {
        return $this->hasMany("App\UserMeta", "user_id", "user_id"); // ตารางที่เราจะเชื่อมด้วย แบบ one-to-many 
    }


}
