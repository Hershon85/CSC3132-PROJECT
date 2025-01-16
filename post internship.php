<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post an Internship</title>
    <link rel="stylesheet" href="css/post internship.css">
</head>
<body>
    <div class="header">
        <h1>Post an Internship</h1>
        <p>Help students find the perfect opportunity by posting your internship here!</p>
    </div>

    <div class="navbar">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="content">
            <h2>Internship Details</h2>
            <form action="submit_internship.php" method="post" class="form">
                <label for="title">Internship Title</label>
                <input type="text" id="title" name="title" placeholder="Enter the internship title" required>

                <label for="company">Company Name</label>
                <input type="text" id="company" name="company" placeholder="Enter the company name" required>

                <label for="location">Location</label>
                <input type="text" id="location" name="location" placeholder="e.g., Remote, New York, etc." required>

                <label for="field">Field/Category</label>
                <input type="text" id="field" name="field" placeholder="e.g., Software Development, Marketing" required>

                <label for="duration">Duration</label>
                <input type="text" id="duration" name="duration" placeholder="e.g., 3 months, 6 months" required>

                <label for="description">Description</label>
                <textarea id="description" name="description" rows="5" placeholder="Provide a brief description of the internship" required></textarea>

                <label for="requirements">Requirements</label>
                <textarea id="requirements" name="requirements" rows="5" placeholder="List any specific requirements" required></textarea>

                <label for="contact">Contact Email</label>
                <input type="email" id="contact" name="contact" placeholder="Enter your contact email" required>

                <button type="submit">Post Internship</button>
            </form>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 CareerWave. All rights reserved.</p>
    </div>
</body>
</html>
