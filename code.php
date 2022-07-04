<?php
session_start();

include('dbcon.php');

if(isset($_POST['delete']))
{
    $student_id = $_POST['delete'];

    try{

        $query = "DELETE FROM students WHERE id=:stud_id";
        $statement = $conn->prepare($query);
        $data = [
            ':stud_id' => $student_id
        ];

        $query_execute = $statement->execute($data);
        if($query_execute)
        {
            $_SESSION['message']="Deleted Succesfully";
            header('location: index.php');
            exit(0);
        
        }
        else 
        {
            $_SESSION['message']="Not Deleted";
            header('location: index.php');
            exit(0);
            }

    } catch(PDOException $e){
        echo $e->getMessage();
    }
}

if(isset($_POST['update']))
{
$student_id = $_POST['student_id'];
$fullname = $_POST['fullname'];
$email  = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];


try{
    
$query = "UPDATE students SET fullname=:fullname, email=:email, phone=:phone, course=:course WHERE id=:stud_id LIMIT 1";
$statement = $conn->prepare($query);

$data = [

    'fullname' => $fullname,
    'email' => $email,
    'phone' => $phone,
    'course' => $course,
    'stud_id' => $student_id,
];
$query_execute = $statement->execute($data);

if($query_execute)
{
    $_SESSION['message']="Updated Succesfully";
    header('location: index.php');
    exit(0);
}
else 
{
    $_SESSION['message']="Not Updated";
    header('location: index.php');
    exit(0);
}

}catch (PDOException $e) {

    echo $e->getMessage();
    }
}

if(isset($_POST['save']))
{
$fullname = $_POST['fullname'];
$email  = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

$query = "INSERT INTO students (fullname, email, phone, course) VALUES (:fullname, :email, :phone, :course)";
$query_run = $conn->prepare($query);

$data =[

    ':fullname' => $fullname,
    ':email' => $email,
    ':phone' => $phone,
    ':course' => $course,
];
$query_execute = $query_run->execute($data);

if($query_execute)
{
    $_SESSION['message']="Inserted Succesfully";
    header('location: index.php');
    exit(0);

}
else 
{
    $_SESSION['message']="Not Inserted";
    header('location: index.php');
    exit(0);
    }
}

?>
