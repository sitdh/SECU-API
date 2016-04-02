<?php namespace App\Http\Controllers;


class OfferingCoursesController extends Controller {

	const MODEL = "App\OfferingCourse";

	const META_MODEL = "App\OfferingCourseMeta";    
	const FIELD_METAKEY = "oc_metakey";  // meta_key field name 
	const FIELD_METAVALUE = "oc_metavalue"; // meta_value field name 

	use RESTMetaActions;

}
