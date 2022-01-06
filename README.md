## SMS Gateway App

### How do I run this project and install database?

**setup docker**

**first run migrations**

    php artisan migrate

**two run seeder database**

    php artisan db:seed --class="DatabaseSeeder" 

**Then run command for run laravel app:**

    php artisan serve

### I using of test case for :

**report of all sms**

**report of sms by phone number**

**login**

**register**

**refresh token**

#### I using of Docker and Docker Compose for project

### I using of queue job for send sms

### I using of Custom Exceptions for throw exceptions and error handling

### Redis Cache with important method Cache::remember() :

**redis** : 

I using of Cache::remember() because this method will cache mysql query for
10 min And if item wasn’t in redis cache first will add to redis And then items
cached show to user and is optimize and short code

### Web Routes Are :

**Login Page:**

    Login

    method : get

    http://127.0.0.1:8000/login

**Report Page:**

    Report page

    method : post,get

    http://127.0.0.1:8000/report


### EndPoints Are :

**Send SMS to phoneNumber:**

    send sms to phoneNumber
    
    header : Authorization Bearer eyJ0eXAiOiJK. .

    input : phoneNumber , body

    method : post

    http://127.0.0.1:8000/api/send-sms
    
**APIs Report All SMS:**

    Report All SMS

    header : Authorization Bearer eyJ0eXAiOiJK...

    input : nothing...

    method : get

    http://127.0.0.1:8000/api/report-all-sms

**Get Report of messages by phone number:**

    get report of messages by phone number
    
    header : Authorization Bearer eyJ0eXAiOiJK. .

    input : phoneNumber

    method : post

    http://127.0.0.1:8000/api/report-sms-by-number

**Login:**

Login with email and password and get jwt token

    input : email,password 
    
    method : post

    http://127.0.0.1:8000/api/auth/login

**Register**

Register user with name,email,password

    input : name,email,password

    method : post 
    
    http://127.0.0.1:8000/api/register

**Refresh token**

    Refresh token

    method : post

    http://127.0.0.1:8000/api/auth/refresh

**Logout token**

    Logout token

    method : post

    http://127.0.0.1:8000/api/auth/logout
    
**Pictures of Test App** 

![smsGateway1](https://user-images.githubusercontent.com/9013165/148432856-ceec0058-6e56-46cb-9bbc-935075f8d281.jpg)


![smsGateway2](https://user-images.githubusercontent.com/9013165/148432955-ec901fb4-5d99-4612-a216-99df931cfaa5.jpg)



![smsGateway3](https://user-images.githubusercontent.com/9013165/148432988-7cd98144-78c0-4945-ba81-5b9196ccb5cc.jpg)

