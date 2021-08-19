
<?php
$errors=[];
$message="";
require 'init.php';
if(isset($_POST['submit'])){
  $username = $_POST["username"];
  $email=$_POST["email"];
  $password=$_POST["password"];

  if(empty($email)){
        $errors[]="Enter Email";
  }
  if(!count($errors)){

  }


$ret =registerUser($username,$email,$password);
if($ret == "Register Success"){
   $message="Register Success";
}
else if($ret=="Email Already To Use"){
     $message="Email Already To Use";
}
else if($ret =="Register Fail"){
  $message="Register Fail";
} 
else if($ret == "Fail"){
  $message=" Fail";
}
 
   
}

/* Sign In */
if(isset($_POST['click'])){
  $username = $_POST["uname"];
  
  $password=$_POST["pass"]; 
}


?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
   src="https://kit.fontawesome.com/64d58efce2.js"
   crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
 </head>

 <body>
  <div class="container">
   <div class="forms-container">
    <div class="strange-body-image">
        <div class="strange-container">
            <div class="strange-links">
              <span class="logo">
                <a href="#"><img class="logo-title" src="img/you.png" alt="Logo"></a>
              </span>
                <nav>
                    <ul>
                       <a href="#"><li>Demos</li></a>
                        <a href="#"><li>Movies</li></a>
                        <a href="#"><li>Shows</li></a>
                        <a href="#"><li>Premium</li></a>
                        <a href="#"><li>Page</li></a>
                        <a href="#"><li>Admin</li></a>
                        <a href="#"><li>Contact</li></a>
                        <a href="../index.html"><li><input class="login-btn" type="button"value="Back"></li></a>
                    </ul>
                </nav>
            </div>
        </div>
    <div class="signin-signup">
     <form action="index.php" class="sign-in-form" method="post">
      
      <h2 class="title">Sign in</h2>
      <div class="input-field">
       <i class="fas fa-user"></i>
       <input type="text" placeholder="Username" name="uname"  id="uname" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" placeholder="Password" name="pass"  id="pass" />
      </div>
      <input class="btn solid" type="submit" name="click" value="Login" />
      <p class="social-text">Or Sign in with social platforms</p>
      <div class="social-media">
       <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     </form>


     <form action="" class="sign-up-form" method="POST" >
     <?php
           foreach($errors as $e){
             echo "<div class='alert alert-danger' style='   max-width: 280px;
             width:70%;
             height: 49px;
             border: none;
             outline: none;
             border-radius: 48px;
             cursor: pointer;
             background-color: #ff0000;
             color: #fff; 
             font-weight: 600;
             margin: 10px ;
             align-items: flex-end;
             justify-content: center;
             text-align: center;
             '>$e</div>";
           }
       
       ?>
     <h2 class="title">Register</h2>
      <div class="input-field">
       <i class="fas fa-user"></i>
       <input type="text" placeholder="Username" name="username" id="username" />
      </div>
      <div class="input-field">
       <i class="fas fa-envelope"></i>
       <input type="email" placeholder="Email" name="email"  id="email" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" placeholder="Password" name="password" id="password"/>
      </div>
      <input type="submit" class="btn" name="submit" value="submit" />
      <p class="social-text">Or Sign up with social platforms</p>
      <div class="social-media">
       <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     </form>
    </div>
   </div>

   <div class="panels-container">
    <div class="panel left-panel">
     <div class="content">
      <h3>New here ?</h3>
      <p>
       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex
       ratione. Aliquid!
      </p>
      <button class="btn transparent" id="sign-up-btn">Sign up</button>
     </div>
     <img src="img/1.png" class="image" alt="" />
    </div>
    <div class="panel right-panel">
     <div class="content">
      <h3>One of us ?</h3>
      <p>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
       laboriosam ad deleniti.
      </p>
      <button class="btn transparent" id="sign-in-btn">Sign in</button>
     </div>
     <img src="img/2.png" class="image" alt="" />
    </div>
   </div>
  </div>
  <script src="app.js"></script>
 </body>
</html>
