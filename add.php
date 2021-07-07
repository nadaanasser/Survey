



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
    <a class="nav-link active" aria-current="page" href="test.php"><i class="fas fa-eye"> Display Survey </i></a>
  </li>
  
 
</ul>

</div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-plus"></i> Add New Survey</h2>
                </div>

                <div class="panel-body">
                    <form action="store.php" method="POST" >
                        <label for="name">Name:</label>
                        <input type="text" id="name" maxlength="255" name="name" class="form-control" placeholder="Enter your name" required>

                        <label for="age">Age:</label>
                        <input type="number" id="age"  name="age" class="form-control" placeholder="Enter your age" required>

                        <label for="image">Image:</label>
                        <input type="file" id="image" name="image" accept="image/*"><br>
                        






                        <label for="hobbies" class="mt-10">Hobbies:</label>
                        <textarea name="hobbies" id="hobbies" cols="30" rows="10" class="form-control"
                                  placeholder="Enter your hobbies" required></textarea>

                        <button type="submit" name="formsubmit" class="btn btn-success btn-block mt-10"><i class="fa fa-plus"></i> Add </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
