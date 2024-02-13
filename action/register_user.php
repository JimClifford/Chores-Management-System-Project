<?php 

include('../settings/connections.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $family_role = $_POST['family_role'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_id = 3;
    
    // Encrypt the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    echo $hashed_password;
    echo $password;

    $insert_query = "INSERT INTO people (rid,fid,fname, lname, gender, tel, dob, email, passwd) VALUES ('$role_id', '$family_role', '$first_name', '$last_name', '$gender', '$phone', '$birthday', '$email', '$hashed_password')";

if ($connection->query($insert_query) === TRUE) {
    echo "Registration Successful";
    header("Location: ../view/login.html");
    exit();
} else {
    echo "Error: " . $insert_query. "<br>" . $connestion->error;
}

}  
else {
    echo "Form not submitted!";
}
$connection->close();
?>