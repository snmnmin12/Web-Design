<?php  
session_start();
require_once('header.php');
?>
  <body>
     <div class="container">
        <div class="card card-container" style = "margin-top:20px">

            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>

            <div class="row">
              <div class="col-md-6" style = "text-align:center;">
                <a href = "#" class="active btn btn-info btn-block" id="login-form-link" >Sign In</a>
              </div>

              <div class="col-md-6" style = "text-align:center;">
                <a href="#" class="btn btn-info btn-block" id="register-form-link">Sign Up</a>
              </div>

            </div>
     <!--        <hr> -->

            <form class="form-signin" method = 'post' id = "login-form">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" name ='username' placeholder="Username" required>
                <input type="password" id="inputPassword" class="form-control" name = 'password' placeholder="Password" required>
              
              <label style = ''> Role </label>
               <select name = 'role'>
                <option value = 'user' select = 'selected'>User</option>
                <option value = 'admin'>Admin</option>
               </select><span style="display: block; margin-bottom: 10px;"></span>
                <button class="btn btn-primary btn-block" name = 'login-sub' type="submit">Login</button>
            </form>

            <form class = "form-signin" method = "post" id = "register-form" style = "display:none">
                 <span id="reauth-email" class="reauth-email"></span>
                <input class = "form-control" type = "text" placeholder = "User Name" name = "regi-username" required autofocus><!-- <br> -->
            <!--     <span>password:</span> -->
                <input class = "form-control" type = "password" placeholder = "Password" name = "regi-password" required>
           <!--          <span>Email:</span> -->
                <input class ="form-control" type = "email" placeholder = "Email" name = "email" required>
<!--                 <span>First name:</span> -->
                <input class ="form-control" type = "text" placeholder = "First Name" name = "fname" required>
<!--                 <span>Last name:</span> -->
                <input class ="form-control" type = "text" placeholder = "Last Name " name = "lname" required>
                <input class="btn btn-lg btn-primary btn-block" type = "submit" name = "regi-sub">
                    <a class ="btn btn-lg btn-info btn-block" href ="index.php">Login</a>
            </form>

        </div>
    </div>

    <?php
           if (isset($_POST['login-sub'])) {

                 $user_name = $_POST['username'];
                 $pass_word = $_POST['password'];
                 

                  $con = mysql_connect('localhost','root','song') or die('Connection is not established!');
                  mysql_select_db('Users', $con);

                  $usersesssion = 1;
                  $query = "select * from users where username = '$user_name' and userpass = '$pass_word'";

                  if ('admin' == $_POST['role'])  {
                       $query = "select * from admin where username = '$user_name' and userpass = '$pass_word'";
                       $usersesssion = 0;
                  }

                  $run = mysql_query($query);
                  // $row = mysql_fetch_assoc($run);
                  // echo "<script>alert('$row');</script>";
                  if ($run and mysql_fetch_assoc($run)) {
                       // echo "<script>alert('$run');</script>";
                       $_SESSION['username'] = $pass_word;
                       if ($usersesssion == 1)  {echo '<script>window.open("../project/user","_self")</script>';}
                       else {echo '<script>window.open("../project/admin","_self")</script>';}
                   } 
                   else {
                    echo "<script>alert('User name or password is incorrect')</script>";
                    exit();
                   }

                mysql_close($con);
                exit();
           }


           if (isset($_POST['regi-sub'])) {
              
              $username = $_POST['regi-username'];
              $password = $_POST['regi-password'];
              $email = $_POST['email'];
              $fname = $_POST['fname'];
              $lname = $_POST['lname'];
              
              // if (empty($username) or empty($password)) {
              //    echo "<script> alert('Please input your username or password!') </script>";
              //    exit();
              // }
              $con = mysql_connect('localhost','root','song') or die('Connection is not established!');
              mysql_select_db('Users', $con);
              $insert = "insert into users values('$username','$password','$email','$fname','$lname')";

              $run = mysql_query($con, $insert);

              if ($run) {
                    echo "<h3> Registration Successful! </h3>";
                    echo "<script>window.open('index.php','_self')</script>";
              } else {
                    echo "<script> alert('Username has been used!') </script>";
              }
              mysqli_close($con);
           }

    ?>
    
  </body>
   <script src="js/login.js"></script>
<?php  require_once('footer.php')?>