<?php 

 define("DB_HOST","localhost");
 define("DB_NAME","kbtc_project_login");
 define("DB_USER","root");
 define("DB_PASS","");


 function dbConnect(){
    
    $db=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_error()){
       echo "Database Connection Fail";
    }
    else{
       return $db;
    }
 }

function insertUser($name,$email,$password){

   $password=encodePass($password);
   $curTime=getTimeNow();
   $db=dbConnect();
   $qry="SELECT * FROM register WHERE email='$email' ";  
  
   $result=mysqli_query($db,$qry);

   if(mysqli_num_rows($result) >0){

      return "Email Already To Use";
   }
   else{
      $qry="INSERT INTO register (name,email,password,created_at,updated_at) VALUES('$name','$email','$password','$curTime','$curTime')";

      $result=mysqli_query($db,$qry);
      if($result==1){
         echo "Register Success";
      }
      else{  
         echo "Register Fail";
      }
 }
}


 



function  encodePass($pass){
   $pass=md5($pass);
   $pass=sha1($pass);
   $pass=crypt($pass,$pass);

   return $pass;
}

 function getTimeNow(){

   return date("Y-m-d H:m:s",time());
 }


?>