<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Manage Chores</title>
      <link rel="stylesheet" href="home.css" />
      
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="home.php" class="logo">
              <img src="logo.png">
              <span class="nav-item">ChoreManager+</span>
            </a></li>
            <li><a href="home.php">
              
              <span class="nav-item">Home - Dashboard</span>
            </a></li>

            <li><a href="addchores.php">
              
              <span class="nav-item">Add Chore</span>
            </a></li>

            <li><a href="managechores.php">
              
              <span class="nav-item">Manage Chores</span>
            </a></li>
            
            <li><a href="assignchore.php">
              
              <span class="nav-item">Assign Chore</span>
            </a></li>

            <li><a href="../settings/logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
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
              <table class="table">
                <thead>
                  <tr>
                    <th>Task</th>
                    <th>Assigned By</th>
                    <th>Date Assigned</th>
                    <th>Date Due</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Laundry</td>
                    <td>Admin 1</td>
                    <td>03-24-23</td>
                    <td>In progress</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>Laundry</td>
                    <td>Admin 1</td>
                    <td>03-13-23</td>
                    <td>In progress</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>Laundry</td>
                    <td>Admin 1</td>
                    <td>04-24-23</td>
                    <td>In progress</td>
                    <td><button>View</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </section>
      </div>
    
    </body>
    </html>
    </span>