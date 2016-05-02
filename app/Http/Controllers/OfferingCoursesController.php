<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// สำหรับเรียกใช้งาน Domain ที่ต้องการ (ที่เก็บ Business logic)
use App\Http\Domains\CourseManagement\CourseDomain;

class OfferingCoursesController extends Controller {

	const MODEL = "App\OfferingCourse";

	const META_MODEL = "App\OfferingCourseMeta";    
	const FIELD_METAKEY = "oc_metakey";  // meta_key field name 
	const FIELD_METAVALUE = "oc_metavalue"; // meta_value field name 

	use RESTMetaActions;


	/************************************************************
	 *     Get Course and assignments by course id              *
	 ************************************************************/

	public function getOfferingCourseAndAssignments($offeringCourseId)
	{
		$result = CourseDomain::getOfferingCourseAndAssignments($offeringCourseId);

		if(is_null($result)){
			return $this->respond(Response::HTTP_NOT_FOUND);
		}

		return $this->respond(Response::HTTP_OK, $result);
	}

}
