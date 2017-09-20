our website login: projects.cse.tamu.edu/snmnmin
homepage: projects.cse.tamu.edu/snmnmin/home.php

to login as admin, please use 
username:admin
password:admin

To connect to your own database, you have to change the database name here in index.php

 $con = mysqli_connect('localhost','root','song','Users') or die('Connection is not established!');


also in the home.php

$con = mysql_connect('localhost','root','song') or die('Connection is not established!');
mysql_select_db('Car', $con);


css and javascript is only for styling 

Remaining work:
1. home.php we need to add the dealer search  to return the search results.

2. The above is home.php is only for user-view page, we need to create a admin-view page to list all the table on the webpage, and realize the create, insert, update, delete function as well as view all the user information

3. The admin view side has been added, but some table still can not be modified because i have not write the PHP files for these tables but the basic modification can already be realized at this point.
