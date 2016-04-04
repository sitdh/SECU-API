<?php

class CourseSeeder extends DatabaseSeeder
{
    public function run()
    {
        $m = \App\Course::create([
            'course_number' => '001',
            'course_name' => 'Coding จีบสาวสไตล์ SE 101',
            'course_description' => 'เปลี่ยนทัศนคติกันก่อน ว่าการจีบสาว นั้นเป็นศิลปะ ไม่ใช่วิทยาศาสตร์ เราไม่สามารถกำหนด วิธีจีบสาว ที่ได้ผลแน่นอน 100% ได้ แต่สิ่งที่เราทำได้ คือ การเพิ่มความกล้า และ เพิ่มโอกาสในการจีบติด สิ่งสำคัญที่ขาดไม่ได้เลย ในการจีบผู้หญิง ก็คือ ความมั่นใจ'
        ]);
        \App\CourseMeta::create([
            "course_id" => $m->getKey(),
            "course_metakey" => "key1",
            "course_metavalue" => "Value A",
        ]);
        \App\CourseMeta::create([
            "course_id" => $m->getKey(),
            "course_metakey" => "key2",
            "course_metavalue" => "Value B",
        ]);
        \App\CourseMeta::create([
            "course_id" => $m->getKey(),
            "course_metakey" => "key3",
            "course_metavalue" => "Value C",
        ]);

        $m = \App\Course::create([
            'course_number' => '002',
            'course_name' => 'Basic Java',
            'course_description' => 'This is a book... kik kik'
        ]);
        \App\CourseMeta::create([
            "course_id" => $m->getKey(),
            "course_metakey" => "key1",
            "course_metavalue" => "Value A",
        ]);
        \App\CourseMeta::create([
            "course_id" => $m->getKey(),
            "course_metakey" => "key2",
            "course_metavalue" => "Value B",
        ]);
        \App\CourseMeta::create([
            "course_id" => $m->getKey(),
            "course_metakey" => "key3",
            "course_metavalue" => "Value C",
        ]);
    }
}
