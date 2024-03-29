<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Chores Dashboard | By Code Info</title>
      <link rel="stylesheet" href="home.css" />
      
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="logo.png">
              <span class="nav-item">ChoreManager+</span>
            </a></li>
            <li><a href="#">
              
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
              
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>
    
    
        <section class="main">
          <div class="main-top">
            <h1>Dashboard</h1>
            
          </div>
          <div class="users">
            <div class="card">
              
                <h4>All Chores</h4>
                 
                 
                <h5>7</h5>
                 
                </div>
            <div class="card">
              
            <h4>In Progress</h4>
             
             
            <h5>12</h5>
             
            </div>
            <div class="card">
              
                <h4>Incomplete</h4>
               
                
                <h5>4</h5>
               
            </div>
            <div class="card">
              
                <h4>Completed</h4>
               
                
                <h5>8</h5>
               
            </div>
          </div>
          <section class="attendance">
            <div class="attendance-list">
              <h1>Recently Assigned Chores</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th>Task</th>
                    <th>Person Assigned</th>
                    <th>Date Assigned</th>
                    <th>Date Completed</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Laundry</td>
                    <td>Father</td>
                    <td>03-24-23</td>
                    <td>03-24-23</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>Laundry</td>
                    <td>Mother</td>
                    <td>03-13-23</td>
                    <td>03-13-23</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>Laundry</td>
                    <td>Son</td>
                    <td>04-24-23</td>
                    <td>04-24-24</td>
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