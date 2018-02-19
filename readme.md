
## About Application
This is my first Laravel application, based on Laravel 5.5. Application equals authorization to Web content and to Web API too.
Using Eloquent Models, database migrations and database seeders. Views was designed in blade. This app is still on production,
will be gradually expanded.

## WEB
To check what app contains, you should login to application:
email:  laraveladmin@laravel.lar
password:  laraveladmin

## Web Service (API)
Api provides login and register users. To check user details, 
First you should login. To do this, send POST (f.e. by Postman) with fields:
email   =  laraveladmin@laravel.lar
password = laraveladmin
to app : http://127.0.0.1:8000/api/login

You will receive token. Add this token in next post header as Authorization key with
Value : 'Bearer ' + received token
http://127.0.0.1:8000/api/login

App return details about user admin.


## Changelog

# version 1.0
- created authorization based on Laravel Auth component
- created user list with static user adding
- added additional fields for every user 
- created WEB API  with login, register and some user details