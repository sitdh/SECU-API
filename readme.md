## SECU - API

SECU-API is api for course management system that include course, question, complier, testcase, user group and user. 

## Requirement

- [Composer] (https://getcomposer.org/)
- Base on [Lumen] (https://lumen.laravel.com/) Framework
- PHP >= 5.5.9
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- MySQL

## Getting Started

- แต่ละกลุ่มทำการ Fork โปรเจคจาก github - https://github.com/Neungzad/SECU-API หลังจากนั้นก็ชวนเป็น Contributor ภายในกลุ่มครับ
- ทำการ Clone โปรเจคไปที่เครื่องของตัวเอง รัน CMD ใน folder SECU-API หลังจากนั้นแล้วใช้คำสั่ง `composer install` เพื่อโหลดไลบารี่ ที่เกี่ยวข้อง
- ให้ copy ไฟล์ `.env.example` แล้วเปลี่ยนชื่อเป็น `.env` แก้ไขรายละเอียดให้ตรงกับฐานข้อมูลภายเครื่องเรา (ต้องสร้าง DB มาก่อนนะ) 
- ลองเข้า `http://localhost/SECU-API/` จะเห็นข้อความดังภาพด้านล่าง

![http://localhost/SECU-API SECU](https://dl.dropboxusercontent.com/u/492974/sdd/empty-page.png)

- ทำการ [Migrate Database] (https://laravel.com/docs/5.0/migrations#rolling-back-migrations) โดย เข้าไปที่ CMD แล้วใช้คำสั่ง `php artisan migrate:refresh --seed` ระบบจะทำการสร้าง Table ให้ทั้งหมดรวมถึงการใส่ข้อมูล dummy บ้างส่วนให้
- หลังจากสำเร็จ ถ้าไม่มี error ลองเข้า `http://localhost/SECU-API/course` จะเห็นข้อมูลดังภาพด้านล่าง

![http://localhost/SECU-API/COURSE SECU](https://dl.dropboxusercontent.com/s/4afkgfqc8nl4f0m/01-course-all.png)	

- [Routing] (https://lumen.laravel.com/docs/5.2/routing) - `/app/Http/routes.php` (มีอธิบายใน comment code) จะเป็นตัวกำหนดว่า url ที่เราพิมพ์ จะให้ไปทำงานที่ controller ไหน

- [Controller] (https://lumen.laravel.com/docs/5.2/controllers) - `app/Http/Controller/CourseController.php` (มีอธิบายใน comment code) 

- Module - `/app/Http/Modules/CourseModule.php` (มีอธิบายใน comment code) สำหรับเก็บ business logic ของแต่ละ module 

- [Model] (https://laravel.com/docs/5.0/eloquent) - `app/Course.php` (มีอธิบายใน comment code) สำหรับเก็บโครงสร้างของ domain ในฐานข้อมูลและจัดการเรื่อง ORM 

**หมายเหตุ:** 
- ต้องการ PHP 5.5.9 ขึ้นไป
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
| /course/{courseId}/meta/{metaKey} | GET | CourseController@getMetaByKey | [example] Get only meta value |

##### ตัวอย่างเวลา Add/Update Meta Data: 

![EX](https://dl.dropboxusercontent.com/s/2a3syezpt6su4q4/Meta-01.png)