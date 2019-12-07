# appointment-webapp-for-library
LibraryPoint - Php Web App for appointment booking with the college library
URL - 
[Visit the live website Librarypoint](http://librarypoint.c1.biz/)
Sample login credentials - use these credentials for testing purposes.

Student email- 2016bit034@sggs.ac.in
Password - student@123

Admin email - admin@sggs.ac.in
Password -  admin@123

Assistant email - amitlakha@sggs.ac.in
Password - assistant@123

Due to the frequent rush at the college library, there was a huge wastage of time to stand in the queue. To solve this issue, I built this web app which allows students to book an appointment with the librarian whenever they want to visit the library. The website has 3 types of users
Admin
Assistants
Students

1. Admin - 
	Admin can View the current appointments, Create assistants, Delete assistants.

2.Assistant - 
	The assistant can view current appointments.

3.Student-
	A student can create a new appointment by choosing the appropriate time slot (if he already has an appointment, he will not be allowed to create another appointment), can view his current appointment time and can cancel the existing appointment.

Technical features
All the users should use their official Email ID provided by the college( ex - 2016bit034@sggs.ac.in  where @sggs.ac.in is the college domain) to register and login.
The website is protected from SQL injection by using MySQLi.
No user can access any webpage by pasting the URL into the browser. (all the users need to login first to access any webpage of the website). This feature was implemented using Sessions in PHP.







