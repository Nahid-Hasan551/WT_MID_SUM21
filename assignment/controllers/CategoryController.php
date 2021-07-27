<?php
include 'models/db_config.php';


$name="";
$err_name="";
$err_db="";
$hasError="";

if(isset($_POST["add_category"])){

if(empty($_POST["name"])){
  $hasError=true;
  $err_name="&nbsp;&nbsp;*Name Required";
}
elseif (strlen($_POST["name"]) <3){
  $hasError = true;
  $err_name = "&nbsp;&nbsp;*Name must be greater than 5 characters";
}
elseif (is_numeric($_POST["name"])){
  $hasError = true;
  $err_name = "&nbsp;&nbsp;*Name must be characters";
    }
else
{
  $name = $_POST["name"];
}




if(!$hasError){
  $rs=insertCategory($name);
  if ($rs === true) {
    header("Location: Allcategories.php");
  }
  $err_db = $rs;
  }



}

elseif (isset($_POST["edit_category"])) {
  if(empty($_POST["name"])){
    $hasError=true;
    $err_name="&nbsp;&nbsp;*Name Required";
  }
  elseif (strlen($_POST["name"]) <3){
    $hasError = true;
    $err_name = "&nbsp;&nbsp;*Name must be greater than 5 characters";
  }
  elseif (is_numeric($_POST["name"])){
    $hasError = true;
    $err_name = "&nbsp;&nbsp;*Name must be characters";
      }
  else
  {
    $name = $_POST["name"];
  }

  if(!$hasError){
    $rs=updateCategory($name,$_POST["id"]);
    if ($rs === true) {
      header("Location: Allcategories.php");
    }
    $err_db = $rs;
    }


}

function insertCategory($name){
  $query="insert into category values (NULL,'$name',1)";
  return execute($query);

}


function getAllCategories(){
  $query="select * from category";
  $rs=get($query);
  return $rs;
}

function getCategory($id){
  $query="select * from category where id=$id";
  $rs=get($query);
  return $rs[0];
}

function updateCategory($name,$id){
  $query="update category set name='$name' where id=$id";
  return execute($query);
}

function countCategory($name){
  $query="select * from category where name=$name";
  $rs = getDetails($query);
  if($rs==$name){
    $count+=1;
    return $count;
  }
}
 ?>

