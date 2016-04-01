<?php namespace App\Http\Controllers;


class AssignmentsController extends Controller {

	const MODEL = "App\Assignment";

	const META_MODEL = "App\AssignmentMeta";
	const FIELD_METAKEY = "assignment_metakey";  // meta_key field name
	const FIELD_METAVALUE = "assignment_metavalue"; // meta_value field name

	use RESTMetaActions;
}
