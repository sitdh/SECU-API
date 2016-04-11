<?php namespace App\Http\Domains\CourseManagement;

// ดึง model ที่ต้องการมาใช้งาน 
use App\Course;

class CourseDomain {

	public static function getMetaByKey($courseId, $metaKey)
	{
		// ดึงข้อมูล course by id
		$course = Course::find($courseId);

		// ทำการดึง meta ออกมาโดยใช้ ORM ที่ต้องกำหนดค่าความสัมพันธ์ที่ model 
		$keyValue = $course->metas->where('course_metakey', $metaKey)->first();

		// return เฉพาะค่า value ที่ต้องการเท่านั้น
		return $keyValue->course_metavalue;
	}

	/* 
	  Write your awesome function here ...
	*/
}
