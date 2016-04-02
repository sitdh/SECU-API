## SECU - API

SECU-API is api for course management system that include course, question, complier, testcase, user group and user. 

## Requirement

- PHP
- Base on [Lumen] (https://lumen.laravel.com/) Framework
- MySQL

## Getting Started

- 0) clone โปรเจคจาก github - https://github.com/Neungzad/SECU-API
- 1) เข้าไปที่ folder -> SECU-API โปรเจคที่ clone มา แล้วใช้คำสั่ง  `composer install` เพื่อโหลดไลบารี่ ที่เกี่ยวข้อง
- 2) ให้ copy ไฟล์ .env.example แล้วเปลี่ยนชื่อเป็น .env แล้วแก้ไข ให้ตรงกับ db ที่เครื่องเรา
- 3) ลองเข้า `http://localhost/SECU-API/` ถ้าแสดงข้อความบางอย่าง แสดงว่าใช้ได้ละ 

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


