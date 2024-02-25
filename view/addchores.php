<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Manage Chores</title>
  <link rel="stylesheet" href="home.css" />
  <style>
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
      background-color: white;
      max-width: 300px;
      padding: 10px;
    }


    /* Full-width input fields */
    .form-popup input[type=text], .form-popup input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-popup input[type=text]:focus, .form-popup input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit button */
    .form-popup .btn {
      background-color: #04AA6D;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom: 10px;
      opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-popup .cancel {
      background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-popup .btn:hover, .open-button:hover {
      opacity: 1;
    }
    
  </style>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="home.html" class="logo">
          <img src="logo.png" alt="Logo">
          <span class="nav-item">ChoreManager+</span>
        </a></li>
        <li><a href="home.php">
          
          <span class="nav-item">Home - Dashboard</span>
        </a></li>
        <li><a href="managechores.php">
          
          <span class="nav-item">Manage Chores</span>
        </a></li>
        <li><a href="addchores.php">
          
          <span class="nav-item">Add Chore</span>
        </a></li>
        <li><a href="assignchore.php">
          
          <span class="nav-item">Assign Chore</span>
        </a></li>
        <li><a href="#" class="logout">
          
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Dashboard</h1>
      </div>

      <section class="attendance">
        <div class="attendance-list">
          <h1>Chore List</h1>

          <!-- A button to open the popup form -->
          <button class="open-button" onclick="openForm()">Add Chore</button>

          <!-- The form -->
          <div class="form-popup" id="myForm">
            <form class="form-container" method="post" action="../action/add_chore.php">
              <h1>Add Chore</h1>
              <input type="text" id="choreName" placeholder="Enter Chore Name" name="choreName" required>
              <button type="submit" class="btn">Add</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
            </form>
          </div>
          <?php
          
          ?>
          <div class="form-popup" id="myEditForm">
            <form class="form-container" method="post" action="../action/edit_a_chore.php">
              <h1>Edit Chore</h1>
              <input type="text" id="choreName" placeholder="Enter Chore Name" name="choreName" required>
              <button type="submit" class="btn">Edit</button>
              <button type="button" class="btn cancel" onclick="closeFormE()">Cancel Edit</button>
            </form>
          </div>

          <table class="table">
            <thead>
              <tr>
                <th>Chore ID</th>
                <th>Chore Name</th>
                <th>Actions</th>

              </tr>
            </thead>
            <tbody>
              <?php
              include '../functions/chore_fxn.php';
              display_chores();
              ?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>

  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }

    function openFormE() {
      document.getElementById("myEditForm").style.display = "block";
    }

    function closeFormE() {
      document.getElementById("myEditForm").style.display = "none";
    }

    function validateInput(input) {
      var regex = /^[a-zA-Z\s]*$/; // Regular expression to allow only alphabets and spaces
      if (!regex.test(input.value)) {
        alert("Please enter only alphabets!");
        input.value = ''; // Clear the input field
      }
    }

    window.onload = function() {
      var choreInput = document.querySelector('input[name="choreName"]');
      choreInput.addEventListener('input', function() {
        validateInput(choreInput);
      });
    };
  </script>
</body>
</html>
