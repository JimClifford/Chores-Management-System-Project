<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Edit Chore</title>
  <link rel="stylesheet" href="home.css" />
  <style>
    /* Add your styles here */
  </style>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
      <li><a href="addchores.php">
          
          <span class="nav-item">Add Chore</span>
        </a></li>

        <li><a href="../settings/logout.php" class="logout">
        
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Edit Chore</h1>
      </div>

      <section class="attendance">
        <div class="attendance-list">
          <!-- Form for editing chore -->
          <form class="form-container" id="editChoreForm" method="post" action="../action/edit_a_chore.php">
            <?php
            include('../action/get_a_chore.php');

            // Check if ID is set in the URL
            if(isset($_GET['id'])) {
                $chore_id = $_GET['id'];
                // Get chore details
                $chore = get_a_chore($chore_id);
                if ($chore && $row = $chore->fetch_assoc()) {
                    // Display chore details with chorename editable
                    echo '<input type="text" id="chore_id" name="chore_id" value="' . $chore_id . '" readonly>';
                    echo '<label for="choreName">Chore Name:</label>';
                    echo '<input type="text" id="choreName" name="choreName" placeholder="' . $row['chorename'] . '" required>';
                    echo '<button type="submit" class="btn" onclick="validateForm()">Update Chore</button>';
                } else {
                    echo '<p>Chore not found!</p>';
                }
            } else {
                echo '<p>Chore ID not provided!</p>';
            }
            
            ?>
          </form>
          
 
        </div>
      </section>
    </section>
  </div>
  
</body>
<script>
    function validateForm() {
      var choreName = document.getElementById("choreName").value;
      // Check if choreName is empty
      if (choreName.trim() == "") {
        alert("Chore Name must not be empty");
        return false;
      }
      // Check if choreName contains numbers
      if (/\d/.test(choreName)) {
        alert("Chore Name must not contain numbers");
        return false;
      }
      if (!/^[a-zA-Z]+$/.test(choreNameInput)) {
        alert("Chore Name must contain only alphabets.");
        return false;
      }

      document.getElementById("editChoreForm").submit();

    }
  </script>
</html>

