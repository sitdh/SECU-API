<?php namespace App\Http\Domains\CourseManagement;

// ดึง model ที่ต้องการมาใช้งาน 
use App\Course;
use App\OfferingCourse;

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

	public static function getOfferingCourseAndAssignments($offeringCourseId)
	{
		// ดึงข้อมูล offeringCourse by id
		$offeringCourse = OfferingCourse::find($offeringCourseId);

		/** 
		 * ดึงข้อมูลที่เป็น parent ของ OfferingCourse คือ Course
		 * (เกิดจากการกำหนด relation ใน file - OfferingCourse.php)
		 */  
		$offeringCourse['coures'] = $offeringCourse->course;   

		/**
		 * ทำการดึง assignments ที่อยู่ภายใต้ offering course มาทั้งหมด
		 * เก็บ assignments เข้าไปรวมกับ offering course เพื่อ return
		 * (เกิดจากการกำหนด relation ใน file - OfferingCourse.php)
		 */
		$offeringCourse['assignments'] = $offeringCourse->assignments;

		return $offeringCourse;
	}

	/* 
	  Write your awesome function here ...
	*/
}
