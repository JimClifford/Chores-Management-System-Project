<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('chores.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
}

        #main_container_login {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        #formArea {
            text-align: center;
        }

        form {
            margin: 0;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #register_button {
            text-align: center;
            margin-top: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

    </style>
</head>
<body>
    <div id="main_container_login">
        
        <div id="formArea">
            
        <form action="../action/login_user.php" method="post">
            <input type="text" id="email" name="email" placeholder="Email"><br>
            <input type="password" id="password" name="password" placeholder="Password"><br><br>
            <input type="submit" value="Sign in" name = 'login'>
            <br><br>
        </form>
        </div>
        

        <div id="register_button">
            <p>Don't have an account?</p>
            <a href="../view/register.php"><button>Register</button></a>
        </div>
        



    </div>

    <?php
// Check if the 'msg' parameter is passed in the URL
$message = '';
if(isset($_GET['msg'])) {
    if ($_GET['msg'] == 'IncorrectPassword'){
        $message = "Type in correct password";
    }
    elseif($_GET['msg'] == 'UserNotFound'){
        $message = "Type in correct email";
    }
    elseif($_GET['msg'] == 'SubmitError'){
       $message = 'There was an error submitting the form';
    }
    
    
} else {
    // If no message parameter is found, set it to null
    $message = 'null';
}


?>
</body>



<script>
    // I TRIED TO DO THE ALERT FUNCTIONALTY BASED ON THE MSG IN GET METHOD , BUT I COULD NOT FIGURE IT OUT.
    document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');

        if (!validateEmail(emailInput.value)) {
            alert('Please enter a valid email address');
            return;
        }

        if (!validatePassword(passwordInput.value)) {
            alert('Password must be at least 8 characters long');
            return;
        }

        form.submit()
    });

    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function validatePassword(password) {
        // Password must be at least 8 characters long
        return password.length >= 8;
    }



});


</script>
</html>