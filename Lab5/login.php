<?php
 session_start();
 $uname="";
 $err_uname="";
 $pass="";
 $err_pass="";
 $hasError=false;
 

 $users= array("nahid"=>"1234","sabbir"=>"456","karim"=>"345", "naifz"=>"789");
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(empty($_POST["uname"]))
     {
         $hasError=true ;
         $err_uname="Username Required";

     }
     else{
         $uname=$_POST["uname"];
     }
     if(empty($_POST["pass"]))
     {
         $hasError=ture;
         $err_pass="Password Required";

     }
     else{
         $pass=$_POST["pass"];
     }
     if(!$hasError)
    {
         foreach($users as $u=>$p)
         {
             if ($uname==$u && $pass==$p )
             {
                 $_SESSION["loggeduser"]=$uname;
                 setcookie("loggeduser",$uname,time()+120);
                 header("Location: dashbord.php");
             }
         }
         echo "invalid username";
     }
 }

?>
<html>
  <body>
    <form action="" method="post">

          Username:<input name="uname" value="<?php echo $uname;?>" type="text">
          <span><?php echo $err_uname;?></span><br>


          Password:<input name="pass" value="<?php echo $pass;?>" type="password" >
          <span><?php echo $err_pass;?></span><br>

          <input type="submit" name="" value="Login">

    </form>
  </body>
</html>