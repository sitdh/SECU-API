## SECU - API

SECU-API is api for course management system that include course, question, complier, testcase, user group and user. 

## Requirement

- PHP
- Base on [Lumen] (https://lumen.laravel.com/) Framework
- MySQL

## Getting Started

1. clone โปรเจคจาก github - https://github.com/Neungzad/SECU-API ไปไว้ใน document_root ของเว็บเซอร์เวอร์ในเครื่อง
1. เข้าไปที่ SECU-API ที่ปรากฎขึ้นหลังจากข้อ 1. โปรเจคที่ clone มา แล้วใช้คำสั่ง  `composer install` เพื่อโหลดไลบารี่ ที่เกี่ยวข้อง
1. ให้ copy ไฟล์ .env.example แล้วเปลี่ยนชื่อเป็น .env แก้ไขรายการข้อมูลด้านใน ให้ตรงกับฐานข้อมูลภายเครื่องเรา
1. ลองเข้า `http://localhost/SECU-API/` จะเห็นข้อความดังภาพด้านล่าง

หมายเหตุ: 
- ต้องการ PHP 5.6 ขึ้นไป
- ในกรณีที่ไม่ได้ติดตั้งเว็บเซิร์ฟเวอร์ภายในเครื่องสามารถใช้คำสั่ง `php -S 0.0.0.0:8000` เพื่อทดสอบการใช้งาน หลังจากนั้นให้เปิดเบราว์เซอร์ด้วย URL `http://localhost:8000`

## Example

Some example for how to call this api

##### Course:
| Url | Type | Controller | Description |
|---------------|----------|--------------|----------------------------------------------------------------|
| /course | GET | CourseController@all | All Courses |
| /course/{id} | GET | CourseController@get | Fetch Courses By id  |
| /course | POST | CourseController@add | Create a course record |
| /course/{id} | PUT | CourseController@put | Update Course by id |
| /course/{id} | DELETE | CourseController@remove | Delete Courses by id |


