<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class UserGroup extends Model
{
	protected $table = 'User_group';
	protected $fillable = array('group_type', 'group_description','sub_group');
}
