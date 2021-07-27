<?php
include 'controllers/CategoryController.php';
$categories = getAllCategories();

 ?>
<html>

  </head>
  <body>
    <h2>All Categories</h2>
    <table>
      <thead>
        <th>Sl#</th>
        <th>Name</th>
        <th>Product Count</th>
        <th></th>
        <th></th>
      </thead>
      <tbody>
        <?php
          $i=1;
          foreach ($categories as $cat) {
            $id =$cat["id"];
            echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>".$cat["name"]."</td>";
              echo'<td> <a href="Editcategory.php?id='.$id.'">Edit</a> </td>';
            echo "</tr>";
            $i++;
          }

         ?>

      </tbody>
    </table>
  </body>
</html>
