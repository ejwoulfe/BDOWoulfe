<?php
if(isset($_POST['recipe_name'])){
require '../connectToDatabase.php';
$recipesPerPage = 100;
$search_value = $_POST['recipe_name'];
$page = $_POST['page'];
$sql_query = "SELECT * FROM cooking_recipes_table WHERE recipe_name LIKE '%{$search_value}%' ";
  $result = mysqli_query($conn, $sql_query);
  while ($row = mysqli_fetch_assoc($result)) {
    $totalRecipes=mysqli_num_rows($result);
    $totalPages= ceil($totalRecipes/$recipesPerPage);
    if($totalRecipes < 1){
      $totalRecipes = 1;
    }
    echo $totalPages;
    for($x = 1; $x<=$totalPages;$x++){
        
    }


    echo '<tr><td class="img_row"><img src="' .$row['recipe_image']. '" height="30" ></td>';
    echo "<td><a class='name_row' href='cookingDetails.php?id={$row['recipe_id']}'>" .$row['recipe_name']. '</td>';

}
}

 ?>
