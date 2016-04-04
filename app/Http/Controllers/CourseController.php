<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// สำหรับเรียกใช้งาน module ที่ต้องการ (ที่เก็บ Business logic)
use App\Http\Modules\CourseModule;

class CourseController extends Controller {

	/************************************************************
	 *         Default CRUD (All,Create,read,update,delete)     *
	 ************************************************************/

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



	/************************************************************
	 *     Addition Custom function for each controller kub     *
	 ************************************************************/

	public function getMetaByKey($courseId, $metaKey)
	{
		$result = CourseModule::getMetaByKey($courseId, $metaKey);

		if(is_null($result)){
			return $this->respond(Response::HTTP_NOT_FOUND);
		}

		return $this->respond(Response::HTTP_OK, $result);
	}	

}
