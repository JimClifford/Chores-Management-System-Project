<?php
include('../action/get_all_chores.php');



function display_chores() {
    $choreList = get_all_chores();
    if ($choreList && $choreList->num_rows > 0) {
        

        // Iterate over each row in the result set
        while ($row = $choreList->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['cid'] . '</td>';
            echo '<td>' . $row['chorename'] . '</td>';
            echo '<td>';
            echo '<a href="../view/edit_chore_view.php?id=' . $row['cid'] . '"><button>Edit</button></a>';
            echo '<a href="../action/delete_chore.php?id=' . $row['cid'] . '"><button>Delete</button></a>';
            echo '</td>';
            echo '</tr>';
        }

        
    } else {
        // If no data retrieved or connection error
        echo '<p>No chores found</p>';
    }

}
?>



