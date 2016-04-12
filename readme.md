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
- [Python 2.7.11] (https://www.python.org/downloads/release/python-2711/) Complier (Set path ให้ใช้งานคำสั่ง python ตรง cmd ได้)

## Getting Started

###[ Wiki การเริ่มต้นการใช้งาน และแนวทางพัฒนาอย่างละเอียด] (https://github.com/Neungzad/SECU-API/wiki/Getting-Started)

**หมายเหตุ:** 
- ต้องการ PHP 5.5.9 ขึ้นไป
- ในกรณีที่ไม่ได้ติดตั้งเว็บเซิร์ฟเวอร์ภายในเครื่องสามารถใช้คำสั่ง `php -S 0.0.0.0:8000` เพื่อทดสอบการใช้งาน หลังจากนั้นให้เปิดเบราว์เซอร์ด้วย URL `http://localhost:8000`

## Example API

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

##### Complier:
| Url | Type | Controller | Description |
|---------------|----------|--------------|----------------------------------------------------------------|
| /complie | POST | ExampleController@complie | input ดู ตย. ด้านล่าง (หากนำไปใช้จริงแล้วก็ลบ route อันนี้ออกได้เลยครับ) |

## Example Input 

ตัวอย่าง input สำหรับสำหรับบาง API

##### Add/Update Meta Data: 

![META DATA](https://dl.dropboxusercontent.com/s/2a3syezpt6su4q4/Meta-01.png)

##### Complier Input: 

![META DATA](https://dl.dropboxusercontent.com/s/ilo6zdsvsgo7lha/2016-04-06_121440_cr2.png)
