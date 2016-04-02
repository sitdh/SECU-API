<?php namespace App\Http\Controllers;


class UserController extends Controller {

	const MODEL = "App\User";


	// เพิ่มเสำหรับ table ที่มี Meta
	const META_MODEL = "App\UserMeta";    
	const FIELD_METAKEY = "user_metakey";  // meta_key field name
	const FIELD_METAVALUE = "user_metavalue"; // meta_value field name

	/**
	 * สำหรับ Meta ให้ใช้
	 * use RESTMetaActions;
	 *
	 * แต่ถ้า table ธรรมดาให้ใช้
	 * use RESTActions;
	 */
	use RESTMetaActions;

}
