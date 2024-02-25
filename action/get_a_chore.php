<?php
include ('../settings/connections.php');

function get_a_chore($ID) {
    global $connection;

    // Prepare the SQL query with a parameter placeholder
    $sqlQuery = "SELECT * FROM chores WHERE cid = ?";
    
    // Prepare the statement
    if ($stmt = $connection->prepare($sqlQuery)) {
        // Bind the parameter
        $stmt->bind_param("i", $ID); // 
        
        // Execute the statement
        if ($stmt->execute()) {
            // Get the result set
            $result = $stmt->get_result();
            
            // Check if any rows are returned
            if ($result->num_rows > 0) {
                // Fetch and return the first row as an associative array
                return $result;
            } else {
                // No rows found
                return null;
            }
        } else {
            // Error executing the statement
            return null;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        // Error preparing the statement
        return null;
    }
}








?>