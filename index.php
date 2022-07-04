<?php session_start(); 
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
    <title>PHP PDO CRUD</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-10 mt-4">

        <?php if(isset($_SESSION['message'])) : ?>
            <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
            
            <?php 
            unset($_SESSION['message']);
            endif;
            
            ?>

        <div class="card">
<h3>PHP PDO CRUD - GROUP NIKA TEST
<a href="student-add.php" class="btn btn-primary float-end">Add Student</a>
</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>

                </thead>
                <tbody>

                <?php
                    $query = "SELECT * FROM students";
                    $statement = $conn->prepare($query);
                    $statement->execute();

                    $result = $statement->fetchAll();
                    if($result)
                    {
                        foreach($result as $row)
                        {
                            ?>
                                 <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['fullname']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['phone']; ?></td>
                                    <td><?= $row['course']; ?></td>

                                    <td>
                                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="code.php" method="POST">
                                            <button type="submit" name="delete" value="<?=$row['id']; ?>" class="btn btn-danger">Delete</form>
                                    </td>

                                </tr>
                            <?php
                        }
                    }
                    else{
                        ?>
                 <tr>
                        
                 <td colspan="5">No Record Found</td>

                </tr>
                        <?php

                    }

                ?>
               
                </tbody>


        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</script>
</body>
</html>