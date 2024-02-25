<?php
          include ('../settings/core.php');
          include ('../settings/connections.php');
        
         if(check_user_login()){
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $chore_name = mysqli_real_escape_string($connection, $_POST['choreName']);
            $chore_id = mysqli_real_escape_string($connection, $_POST['chore_id']);
            
            
            $query = "UPDATE chores SET chorename = '$chore_name' WHERE cid = '$chore_id'";
        
            if ($connection->query($query) === TRUE) {
                header("Location: ../view/addchores.php");
            } else {
                // Give Error
                echo "Error: ". $query."<br>". $connection->error;
            }
        
        }  
        else {
            echo "Form not submitted!";
        }
          
        // Close connection
        $connection->close();
    } else{
    header("Location: ../view/login.php");
    die("Sorry, your session has expired.");
    }
  
?>