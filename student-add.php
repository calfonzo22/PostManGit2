<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Insert Data into Database using PHP PDO - Nika Group</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-10 mt-4">

        <div class="card">
<h3>Insert Data into Database using PHP PDO - Nika Group
<a href="index.php" class="btn btn-danger float-end">Back</a>
</h3>
        </div>
        <div class="card-body">
        <form action="code.php" method="POST">
            <div class="mb-3">
                <label>Full Name</label>
                <input type="text" name="fullname" class="form-control"/>
                <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control"/>

                <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control"/>

                <div class="mb-3">
                <label>Course</label>
                <input type="text" name="course" class="form-control"/>
            </div>
            <div class="mb-3">

            <button type="submit" name="save" class="btn btn-primary">Save Student</button>

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