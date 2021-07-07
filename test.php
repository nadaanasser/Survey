<?php 
require "db_connection.php";

$query = "SELECT * FROM survey";
$query_run = mysqli_query($conn, $query);

    if (!$query_run)
        die("Query error.");

  

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  
	<title>
	Survey
	</title>

   <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
  
  .n {

    margin: 10px;
 }
</style>
<body>


    <div class="row">
        <div class="col-md-12">


  <div class="n">


    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="add.php"><i class="fas fa-plus"> add</i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-eye"> Display Survey </i></a>
  </li>
  
 
</ul>

</div>
</div>
</div>

<table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
       <th scope="col"><i class="fas fa-file-image"> Image </i></th>
      <th scope="col">Age</th>
     
      <th scope="col">Hobbies</th>
    </tr>
  </thead>
  <tbody>
     
     

                        <?php
        while ($result = mysqli_fetch_assoc($query_run)) {
            echo "
                                    <tr class='text-center'> 
                                     
                                        <td>" . $result['name'] . "</td>
                                        <td>" . $result['image'] . "</td>
                                        <td>" . $result['age'] . "</td>
                                        <td>" . $result['hobbies'] . "</td>  
                                        </tr>
                                              ";
                        }
                        ?>


  </tbody>

  
</table>
  </div>
    </div>
</div>
</body>
</html>