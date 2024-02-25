<?php
include ('../settings/connections.php');


// Check if the 'id' parameter exists in the URL
if(isset($_GET['id'])) {
    // 'id' parameter exists, retrieve its value
    $id = $_GET['id'];
    $sql = "DELETE FROM chores WHERE cid = ?";

    if($stmt = $connection->prepare($sql)){
        // Bind the parameter
        $stmt->bind_param("i", $id);
        
        // Execute the statement
        if($stmt->execute()){
            // Record deleted successfully
            header("Location: ../view/addchores.php");
        } else{
            // Error executing delete query
            header("Location: ../view/addchores.php?msg=DeleteError");
            // echo "Error executing delete query: " . $stmt->error;
        }
        
        // Close statement
        $stmt->close();
    } else{
        // Error preparing delete statement
        header("Location: ../view/addchores.php?msg=Error");
        // echo "Error preparing delete statement: " . $connection->error;
    }
} else {
    
    // 'id' parameter does not exist in the URL
    header("Location: ../view/addchores.php");
}

// Close connection
$connection->close();





?>