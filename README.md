Step 1
Composer update
If there is an error, you can not update the composer, please log in to xampp
a php.init configuration
Ctrl +F : expand time=zip rub head ; posted first

Step 2
Install xampp from mysql and import file app/asm2.sql
create .env file and put data from .env for example

name correction database

key create php manual key: create

edit .env

enter email into .env

experiment
MAIL_MAILER=smtp<br>
MAIL_HOST=smtp.gmail.com<br>
MAIL_PORT=587<br>
MAIL_USERNAME=enter your gmail<br>
MAIL_PASSWORD=rxlstcsrnuuszvdd (app password - google)<br>
MAIL_ENCRYPTION=tls<br>
MAIL_FROM_ADDRESS=enter email<br>
MAIL_FROM_NAME="${APP_NAME}"<br>

php artisan service

FEATURE

- About users:
Log in
Register
Change Password
Update product files
Add products to the row
Product updates
Order check out
Forgot password (Forgot password will send a link to the email and when the user clicks it will go to the password reset form)

- About admin
Log in
Add - edit - delete products

View customer order information

Pass admin login email admin123@gmail.com pass: 123456
