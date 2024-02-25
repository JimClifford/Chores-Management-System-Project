<?php 


session_start();

$session_lifetime = 1 * 60; 
session_set_cookie_params($session_lifetime);


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    include ('../settings/connections.php');
    
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    
    
    // Query to check if the user exists with the provided email
    $sql_query = "SELECT * FROM people WHERE email = '$email'";
    $result = $connection->query($sql_query);
    
    
    if ($result->num_rows > 0) {
        // User found, verify password
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['passwd'])) {
            // Password is correct, create session variables
            $_SESSION['user_id'] = $user['pid'];
            $_SESSION['role_id'] = $user['rid'];
            $_SESSION['fname'] = $user['fname'];
            $_SESSION['lname'] = $user['lname'];

            // Redirect to homepage bases on role ID
            if ($_SESSION['role_id'] == 1){
            header("Location: ../admin/adminhome.php");}
            elseif ($_SESSION['role_id'] == 2) {
            header("Location: ../admin/adminhome.php");
            }else{
            header("Location: ../view/home.php");
            }
            exit();
        } else {
            // Password is incorrect
            // use the header function to redirect to login.php and then give a message;
            header("Location: ../view/login.php?msg=IncorrectPassword");
        }
        
    } else {
        // User not faound
        header("Location: ../view/login.php?msg=UserNotFound");
    
    }
} 
else {
    header("Location: ../view/login.html?msg=SubmitError");

}
$connection->close();

?>
