<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
   
    <div class="header">
        <h1>Sign up with CareerWave</h1>
        <p>Let's Start</p>
    </div>

    <div class="content">
        <form class="form" action="php/signup.php" method="post">
            <h3>Sign up to Your Account</h3>
            <input type="name" name="fname" placeholder="Enter Your First Name" required>
            <input type="name" name="lname" placeholder="Enter Your Last Name" required>
            <input type="number" name="phone" placeholder="Enter Your Phone Number" required>
            <input type="email" name="email" placeholder="Enter Your Email Address" required>
            <input type="password" name="password" placeholder="Enter Your Password" required><br>
            <select name="role" required>
                <option value="" disabled selected>Select Your Role</option>
                <option value="employer">Employer</option>
                <option value="jobseeker">JobSeeker</option>
            </select><br><br>
            <button type="submit">Sign up</button>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2024 CareerWave. All rights reserved.</p>
    </div>
    
</body>
</html>