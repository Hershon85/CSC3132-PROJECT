<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now - CareerWave</title>
    <link rel="stylesheet" href="css/apply now.css">
</head>
<body>
    <div class="container">
        <h1>Apply for Internship</h1>
        <p>Please fill in the details below to apply for the internship:</p>

        <form class="apply-form" action="submit_application.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required placeholder="Enter your full name">

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email address">

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">

            <label for="resume">Upload Resume:</label>
            <input type="file" id="resume" name="resume" required>

            <label for="cover_letter">Cover Letter:</label>
            <textarea id="cover_letter" name="cover_letter" rows="6" placeholder="Write a brief cover letter..." required></textarea>

            <button type="submit" class="submit-btn">Submit Application</button>
        </form>
    </div>
</body>
</html>
