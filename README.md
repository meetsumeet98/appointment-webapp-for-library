# appointment-webapp-for-library
#LibraryPoint - A Php Web App for appointment booking with the college library<br/>
URL - 
[live website - Librarypoint](http://librarypoint.c1.biz/)<br/>

Sample login credentials - use these credentials for testing purposes.<br/>

Student email- 2016bit034@sggs.ac.in<br/>
Password - student@123<br/>

Admin email - admin@sggs.ac.in<br/>
Password -  admin@123

Assistant email - amitlakha@sggs.ac.in<br/>
Password - assistant@123

Due to the frequent rush at the college library, there was a huge wastage of time to stand in the queue. To solve this issue, I built this web app which allows students to book an appointment with the librarian whenever they want to visit the library. The website has 3 types of users<br/>
Admin<br/>
Assistants<br/>
Students<br/>

1. Admin - 
Admin can View the current appointments, Create assistants, Delete assistants.<br/>

2.Assistant - 
The assistant can view current appointments.<br/>

3.Student-
A student can create a new appointment by choosing the appropriate time slot (if he already has an appointment, he will not be allowed to create another appointment), can view his current appointment time and can cancel the existing appointment.<br/>

#Technical features<br/>
All the users should use their official Email ID provided by the college( ex - 2016bit034@sggs.ac.in  where @sggs.ac.in is the college domain) to register and login.<br/>
The website is protected from SQL injection by using MySQLi.<br/>
No user can access any webpage by pasting the URL into the browser. (all the users need to login first to access any webpage of the website). This feature was implemented using Sessions in PHP.<br/>







