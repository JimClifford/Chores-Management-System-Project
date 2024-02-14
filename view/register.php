<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        body {
            background-image: url('register.jpg'); /* Replace 'register.jpg' with your actual image file path */
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        #main_area_register {
            max-width: 600px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        form {
            text-align: center;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        button {
            background-color: #008CBA;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0073A8;
        }

        h1 {
            text-align: center;
            font-family: 'Arial Black', sans-serif;
            color: #008CBA;
        }
        p {
            color: #008CBA;
        }
        #genderfield {
            color: #008CBA;
        }
    </style>
</head>
<body>
    <div id="main_area_register">
        <h1>Register Page</h1>
        <form action="../action/register_user.php" method="post">
            <input type="text" id="first_name" name="first_name" placeholder="First Name"><br>
            <input type="text" id="last_name" name="last_name" placeholder="Last Name"><br>
        
            <div id="genderfield">
            <p>Please select your gender:</p>
            <select name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            </div>
            <p>Please select your role</p>
            <select name="family_role" id="family_role">
                <?php
                include("../functions/select_role.php");
                // Check if result_query contains data
                if ($result_query && $result_query->num_rows > 0) {
                    // Iterate over each row in the result set
                    while ($row = $result_query->fetch_assoc()) {
                        // Output an option for each family role
                        echo '<option value="' . $row['fid'] . '">' . $row['fam_name'] . '</option>';
                    }
                } else {
                    // If no data retrieved or connection error
                    echo '<option value="">No family Roles Found</option>';
                }
                ?>
            </select>
            


            <div>
                <p>Age:</p><input type="date" id="birthday" name="birthday" placeholder="Birthday"><br>
            </div>
            

            <input type="tel" id="phone" name="phone" placeholder="233-456-789-123" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" required><br>
            <small>Format: 233-456-789-123</small><br>

            <input type="text" id="email" name="email"  placeholder="Email"><br>

            <input type="password" id="password" name="password" placeholder="Password"><br>

            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password"><br>

            <button type="submit">Register</button>

            <div>
                Already have an account? Sign in <a href="../view/login.html">here</a>
            </div>
        </form>
    </div>
</body>
<?php

?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const firstNameInput = document.getElementById('first_name');
        const lastNameInput = document.getElementById('last_name');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirm_password');
        const phoneInput = document.getElementById('phone');

        if (!validateName(firstNameInput.value)) {
            alert('Please enter a valid first name');
            return;
        }

        if (!validateName(lastNameInput.value)) {
            alert('Please enter a valid last name');
            return;
        }

        if (!validateEmail(emailInput.value)) {
            alert('Please enter a valid email address');
            return;
        }

        if (!validatePassword(passwordInput.value)) {
            alert('Password must be at least 8 characters long');
            return;
        }

        if (passwordInput.value !== confirmPasswordInput.value) {
            alert('Passwords do not match');
            return;
        }

        if (!validatePhone(phoneInput.value)) {
            alert('Please enter a valid phone number in the format 233-456-789-123');
            return;
        }

        // Form is valid, you can proceed with submission or other actions
        // For example, you can submit the form using form.submit()
        form.submit();
    });

    function validateName(name) {
        // Allow letters, spaces, and hyphens in names
        const nameRegex = /^[A-Za-z\s\-]+$/;
        return nameRegex.test(name);
    }

    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function validatePassword(password) {
        // Password must be at least 8 characters long
        return password.length >= 8;
    }

    function validatePhone(phone) {
        // Phone number in the format 233-456-789-123
        const phoneRegex = /^[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}$/;
        return phoneRegex.test(phone);
    }
});

</script>
</html>
