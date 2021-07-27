<?php
include 'controllers/CategoryController.php';
$id=$_GET["id"];
$cat=getCategory($id);

 ?>
<html>

  <body>
    <form class="" action="" method="POST">
      <h2>Edit Categories</h2>
      <h5><?php echo $err_db; ?></h5>
      <tr>
        <td >Name</td>
        <td>
           <input name="id" value="<?php echo $cat["id"];?>" type="hidden">
        </td>
        <td>
          :  <input name="name" value="<?php echo $cat["name"];?>" type="text"><br>
        </td>
        <tr>
          <td align="center"><input type="submit" name="edit_category" value="Edit Categories" ></td>
        </tr>

        <tr>
    </form>
  </body>
</html>