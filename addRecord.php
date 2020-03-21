<?php
include_once('config.php');
?>
<?php
    if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    
    $sql  = "INSERT INTO `Students` (name, age, course, branch ,contact, email) 
    VALUES ('$name', '$age','$course','$branch', '$contact', '$email')";
    if(mysqli_query($conn, $sql)){
        echo 'Data inserted successfully';
    }
    else{
        echo 'Data insertion failed'.mysqli_error($conn);
    }
}
else
{
    echo "Go back to input page";
}
?>
