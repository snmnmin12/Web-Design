## Introduction
This is the Vehicle Information Management System implemented in Java Spring MVC + Hibernate. Features included here is 

1. Home page display all
2. Vehicle Details display
3. Login/Logout
4. User Information Management
5. Comments/Review management for specific car model.

All the source files are in the MyApp folder. To run it in local machine, simply download the files and import the files into your Eclipse. You need to have maven plugin installed in your Eclipse before you do the above steps.

Database configuration needs to be done in ```MyApp/src/main/webapp/WEB-INF/applicationContext.xml```

```
<bean id="dataSource" class="org.apache.tomcat.jdbc.pool.DataSource" destroy-method="close">
    <property name="driverClassName" value="com.mysql.jdbc.Driver" />
    <property name="url" value="jdbc:mysql://localhost:3306/MyApp" />
    <property name="username" value="root" />
    <property name="password" value="song" />
    <property name="initialSize" value="1" />
</bean>
```
Data base can be established to import the SQL script files in ```Data``` folder, it will guides you to create database table, and insert data into databases.  All data are collected from internet. I used Python to access one famous used car web api to retrieve data and then cleaned them to save in databases.

Now, you can run maven clean and maven generate in Eclipse to generate the classes, and then you can run it on server. All package dependences are included in the ```pom.xml``` files. The web server I tested is ```Tomcat v8.5```.

## Feature Description 
This is the screenshot for home pages to display all the products it has and some basic information. Here, the pagination is also used to go over pages one by page.

![](img/home-1.png)

![](img/home-2.png)


Let's go to the more information pages, by click ```More information``` buttons, it leads to a information page. Here, session is used to save the user logging information. So it will display the logged user name in the right upper corner.
In addition to that, all the technical parameters are also showed such as style, engine information.

![](img/detail-1.png)
 
![](img/detail-2.png)

User can also give comments for this particular car. All comments/reviews for the selected car are listed there with usernames and timestamp when the comments are generated.

In the log in page, user can log in to the web page.
![](img/signup.png)
