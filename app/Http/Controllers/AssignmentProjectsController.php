<?php namespace App\Http\Controllers;


class AssignmentProjectsController extends Controller {

	const MODEL = "App\AssignmentProject";

	const META_MODEL = "App\AssignmentProjectMeta";
	const FIELD_METAKEY = "assproj_metakey";  // meta_key field name
	const FIELD_METAVALUE = "assproj_metavalue"; // meta_value field name

	use RESTMetaActions;

}
