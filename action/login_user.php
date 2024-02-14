<?php 

session_start();
error_reporting(E_ALL); ini_set('display_errors', 1);




if ($_SERVER["REQUEST_METHOD"] == "POST" /*&& isset($_POST['login'])*/) {
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
            $_SESSION['user_id'] = $user['fid'];
            $_SESSION['role_id'] = $user['rid'];

            // Redirect to homepage
            header("Location: ../view/home.html");
            exit();
        } else {
            // Password is incorrect
            echo "<script>alert('Incorrect password. Please type in the correct password.');</script>";
        }
        
    } else {
        // User not found
        header("Location: ../view/login.html");
        echo "Incorrect email Or User not found:"."<script>alert('Type in the correct email.');</script>";
    }
} 
else {
    header("Location: ../view/login.html");

}
$connection->close();

?>
