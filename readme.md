
# Task Assestment


*******************
Task 1
*******************

Database assignment.
---------
First you need to create database using Mysql
Here , you have to  create three tables.

First table ====> users
(id[auto-increment], username, password, created_at, modified_at, last_login, last_ip)

Second table ===> currency_informations
(id, name, num_code, char_code, nominal, value)

Third table ===> log_table
(id[auto inc], request_ip, created_at, status, comments)

Table , field and database should be
Character set: utf8
Collation: utf8_general_ci

PHP assignment.
--------
You have to collect data from an open source URL (XML format) then that data should be stored in the database and finally you have to show that data with pagination.

XML url===> https://www.cbr.ru/scripts/XML_daily.asp?date_req=02/09/2002

Follow:
- Store the data in the "currency_information" table which will get from XML url.
(Do not do that manually you have to do that programmatically because If you click on the update button, all the data should be updated).

- Show data with all fields of the "currency_information" table with pagination.

- You have to insert a single user information in the User table whose password must be encrypted. (you can do it statically or programmatically)


*******************
Task 2
*******************
You need to implement a REST API. Where given the currency code will return a single currency information. You will get the information about that currency in the "currency_information" table which you already created.
It must use the GET method and static authentication key.
When Clients use your REST API method then they have to use authentication key and Currency code.

All requests from the client for REST API  should be stored in the "log_table" table.


*******************
Project Information
*******************

| Language & Tools  | Description          |
| ------------------| ---------------------|
| PHP version       | 7.4                  |
| Framework         | Codeigniter 3        |
| Database          | MySQL                |
| Frontend          | HTML,Bootstrap,JQuery|


**************************
Project Setup & Logging
**************************
1. Download the project as ZIP or clone the repo to XAMPP/htdocs directory and name directory as assignment.
2. Create database as assignment.
3. Import DB file from assignment/db directory.
4. & browse [project url](http://localhost/assignment) from any browser.
5. Username & password: demo_123

*******************
Live Preview
*******************
[Click Here](https://task-bdgrowtech.herokuapp.com)

- Host Platform: heroku

*******************
API Documentation
*******************

[Please visit this link](https://documenter.getpostman.com/view/10912457/2s8YK7pQtr)

