<?php
   $name="";
   $err_name="";
   $uname="";
   $err_uname="";
   $password="";
   $err_password="";
   $address="";
   $err_address="";
   $email="";
   $err_email="";


   $hasError=false;
     
   if($_SERVER["REQUEST_METHOD"] =="POST")
   {
     if(empty($_POST["name"]))
     {
          $hasError=true;
          $err_name="Name Required";
     }
     else if (strlen($_POST["name"]) <=2)
     {
          $hasError=true;
          $err_name="Name must be grater than two charecter";
     }
     else
     {
          $name=$_POST["name"];
          
     }
     if(empty($_POST["username"]))
     {
          $hasError=true;
          $err_uname="User Name requaired";
     }
     else if (strlen($_POST["username"]) <=6 or ctype_space($_POST["username"]) )
     {
          $hasError=true;
          $err_uname="Name must be at 6least charecter and space is not allowed";
     }
     else
     {
          $uname=$_POST["username"];
          
     }
     if(empty($_POST["pass"]))
     {
          $hasError=true;
          $err_password="password  requaired";
     }
     else if (strlen($_POST["pass"]) <=8 or ctype_space($_POST["pass"]) or is_numeric($_POST["pass"]))
     {
          $hasError=true;
          $err_password="Password must be 8 charecter and Contain special charecter & Number";
     }
     else
     {
          $password=$_POST["pass"];
          
     }

     if(empty($_POST["add"]))
     {
          $hasError=true;
          $err_address="Address Required";
     }
     else
     {
          $address=$_POST["add"];
          
     }

     if(empty($_POST["email"]))
     {
          $hasError=true;
          $err_email="Email  Required";
     }
    
     else
     {
          $email=$_POST["email"];
          
     }



    echo $_POST["name"]."<br>";
    echo $_POST["username"]."<br>";
    echo $_POST["pass"]."<br>";
    echo $_POST["add"]."<br>";
    echo $_POST["add"]."<br>";
    echo $_POST["email"]."<br>";
     

     
   }
 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form class="" action="formvalidation.php" method="post">
<fieldset style="">
    <tabel>
        <h3> Club Member Registaratuion</h3>
     <tr>
         
         <td align="right"> Name: &emsp;&emsp;&emsp;&emsp;&emsp; </td>
         <td><input type="text" name="name"></td>
         <td><span><?php echo $err_name;?> </span></td>
    </tr><br><br>

    <tr>   
      <td align="right"> Username: &emsp;&emsp;&emsp;&nbsp;</td>
      <td><input type="text" name="username"></td>
      <td><span><?php echo $err_uname;?></span></td>
    </tr><br><br>

    <tr>
         <td align="right"> Password:&emsp;&emsp;&emsp;&emsp; </td>
         <td><input type="password" name="pass"></td>
         <td><span><?php echo $err_password;?></span></td>
    </tr><br><br>

    <tr>
         <td align="right">  Confirm Password: </td>
         <td><input type="password" name="confirmpass"></td>
    </tr><br><br>
    <tr>
         <td align="right"> Email: &emsp;&emsp;&emsp;&emsp;&emsp; </td>
         <td><input type="text" name="email"></td>
         <td><span><?php echo $err_email;?></span></td>
    </tr><br> <br>
    <tr>
         <td align="right"> Phone:&emsp;&emsp;&emsp;&emsp;&emsp; </td>
         <td><input type="number" placeholder="Code"></td>
         <span>-</span>
         <td><input type="number " placeholder="Number"></td>
         <td><span><?php echo $err_address;?></span></td>
    </tr><br> <br>

    <tr>
         <td colspan="2">
         <td align="right"> Address:&emsp;&emsp;&emsp;&emsp; </td>
         <td><input type="text" placeholder="Stress Address"></td><br><br>
         <td><input type="text" placeholder="City"><td>
             <span>-</span>
         <td><input type="text" placeholder="State"><td><br><br>
         <td><input type="text" placeholder="Postal/Zip"><td>

    </tr><br><br>

    <tr>
         <td align="right"> Birth Date: </td>
         <td><input type="date"></td>
    </tr><br><br>
    <tr>
         <td align="right"> Gender:: </td>
         <td><input type="radio" name="gender" value="">Male</td>
         <td><input type="radio" name="gender" value="">Female</td>
    </tr><br><br>

    <tr>
            <td align="right"><span>Where did you hear about us</span></td>
            <td><input type="checkbox" name="" value="">A Friend or Colleague<br>
            <td><input type="checkbox" name="" value="">Google<br>
            <td><input type="checkbox" name="" value="">BLog Post<br>
            <td><input type="checkbox" name="" value="">News Article 
            </td>
    </tr><br>
    <tr>
        <td align="right"> Bio:</td>
        <td><textarea></textarea></td>
    </tr><br> 
    <tr>
        <td align="right"> </td>
        <td><input type="submit" placeholder="Register"></td>
    </tr> 

    

            
    </tabel>
 </fieldset>
</form>
</body>
</html>
