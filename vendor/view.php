

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <style>
      .parent
      {
          
            width:fit-content;
            padding:10px;
            background-color:bisque;
            display:inline-block;
      }
      .image
      {
            width:300px;
            height:200px;
      }
     </style> 
</head>
<body>


</body>
</html>
<?php

include "menu.php";
include_once "../shared/connection.php";

include "vendor_session.php";

$mysqli_obj=mysqli_query($conn,"select * from product");

echo "<h1>uploaded one's</h1><br>";

while($row=mysqli_fetch_assoc($mysqli_obj))
{
      // print_r($row);
      // echo "<br>";
      $pid=$row['pid'];
      $name=$row['name'];
      $price=$row['price'];
      $impath=$row['impath'];
      $details=$row['details'];
      echo "<div class='parent'>
      <img class='image' src='../image/$impath' alt='Card image'>
      <div class='card-body'>
          <h4 class=''>$name  <span class='text-danger'>$price Rs </span></h4>
          <p class='card-text'>$details</p>
          <div class='d-flex justify-content-between'>                
          <a href='edit_product_html.php?pid=$pid' > <button class='btn btn-warning'> <i class='fa fa-edit'> </i>  </button>  </a>
          <a href='delete_product.php?pid=$pid' > <button class='btn btn-danger'> <i class='fa fa-trash'> </i>  </button>  </a>
          </div>
      </div>
  </div>";
}
?>