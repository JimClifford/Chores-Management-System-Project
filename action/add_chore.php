<?php
include('../settings/core.php');
include('../settings/connections.php');

if (check_user_login()) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Stage 1
        $chore_name = mysqli_real_escape_string($connection, $_POST['choreName']);
        
        
    
        $insert_query = "INSERT INTO chores (chorename) VALUES ('$chore_name')";
    
        if ($connection->query($insert_query) === TRUE) {
            
            header("Location: ../view/addchores.php");
            
        } else {
            // Give Error
            echo "Error: ". $insert_query."<br>". $connestion->error;
        }
    
    }  
    else {
        echo "Form not submitted!";
    }
    $connection->close();
    
}
else{
    header("Location: ../view/login.php");
    die("Sorry, your session has expired.");
}






?>
