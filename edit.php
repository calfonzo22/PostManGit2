<?php
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Edit & Update Data into Database using PHP PDO - Nika Group</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-10 mt-4">

        <div class="card">
<h3>Edit & Update Data into Database using PHP PDO - Nika Group
<a href="index.php" class="btn btn-danger float-end">Back</a>
</h3>
        </div>
        <div class="card-body">
       
       <?php 
        if(isset($_GET['student_id']));
{
        $student_id = $_GET['id'];

        $query = "SELECT * FROM students WHERE id=:stud_id LIMIT 1";
        $statement = $conn->prepare($query);
        $data = [':stud_id' => $student_id];
        $statement ->execute($data);

        $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
}
       ?>

        <form action="code.php" method="POST">
        
        <input type="text"  name="student_id" value="<?=$result->id?>"/>
        
        <div class="mb-3">
            
            <label>Full Name</label>
                <input type="text" name="fullname" value="<?=$result->fullname; ?>"  class="form-control"/>
                <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" value="<?=$result->email; ?>" class="form-control"/>

                <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" value="<?=$result->phone; ?>"  class="form-control"/>

                <div class="mb-3">
                <label>Course</label>
                <input type="text" name="course" value="<?=$result->course; ?>"  class="form-control"/>
            </div>
            <div class="mb-3">

            <button type="submit" name="update" class="btn btn-primary">Update Student</button>

            </div>

        </form>

        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</script>
</body>
</html>