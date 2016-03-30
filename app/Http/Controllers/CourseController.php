<?php namespace App\Http\Controllers;


class CourseController extends Controller {

	const MODEL = "App\Course";

	// เพิ่มเสำหรับ table ที่มี Meta 
	const META_MODEL = "App\CourseMeta";    
	const FIELD_METAKEY = "course_metakey";  // meta_key field name 
	const FIELD_METAVALUE = "course_metavalue"; // meta_value field name 

	/**
	 * สำหรับ Meta ให้ใช้ 
	 * use RESTMetaActions;
	 *
	 * แต่ถ้า table ธรรมดาให้ใช้ 
	 * use RESTActions;
	 */
	use RESTMetaActions;

}
