<?php namespace App\Http\Controllers;


class GroupWorkshopsController extends Controller {

	const MODEL = "App\GroupWorkshop";

	const META_MODEL = "App\GroupWorkshopMeta";
	const FIELD_METAKEY = "ga_metakey";  // meta_key field name
	const FIELD_METAVALUE = "ga_metavalue"; // meta_value field name

	use RESTMetaActions;

}
