<?php 

include('../settings/connections.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Stage 1
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $family_role = mysqli_real_escape_string($connection, $_POST['family_role']);
    $birthday = mysqli_real_escape_string($connection, $_POST['birthday']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $role_id  = 3;
    // Stage 2
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $insert_query = "INSERT INTO people (rid,fid,fname, lname, gender, tel, dob, email, passwd) VALUES ('$role_id', '$family_role', '$first_name', '$last_name', '$gender', '$phone', '$birthday', '$email', '$hashed_password')";

    if ($connection->query($insert_query) === TRUE) {
        
        header("Location: ../view/login.php?msg=success");
        
    } else {
        echo "Error: ". $insert_query."<br>". $connestion->error;
    }

}  
else {
    echo "Form not submitted!";
}
$connection->close();
?>