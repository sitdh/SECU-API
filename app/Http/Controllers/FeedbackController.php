<?php namespace App\Http\Controllers;


class FeedbackController extends Controller {

	const MODEL = "App\Feedback";


	// เพิ่มเสำหรับ table ที่มี Meta
	const META_MODEL = "App\FeedbackMeta";    
	const FIELD_METAKEY = "feedback_metakey";  // meta_key field name
	const FIELD_METAVALUE = "feedback_metavalue"; // meta_value field name

	/**
	 * สำหรับ Meta ให้ใช้
	 * use RESTMetaActions;
	 *
	 * แต่ถ้า table ธรรมดาให้ใช้
	 * use RESTActions;
	 */
	use RESTMetaActions;

}
