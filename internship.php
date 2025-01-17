<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Internships</title>
    <link rel="stylesheet" href="css/internship.css">
</head>
<body>
    <div class="header">
        <h1>Find Your Ideal Internship</h1>
        <p>Browse and apply to internships that match your skills and interests!</p>
    </div>
    
    <div class="navbar">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    
    <div class="main-content">
        <div class="sidebar">
            <h2>Filters</h2>
            <form>
                <label for="field">Field:</label>
                <select id="field">
                    <option value="all">All</option>
                    <option value="technology">Technology</option>
                    <option value="marketing">Marketing</option>
                    <option value="finance">Finance</option>
                    <option value="engineering">Engineering</option>
                    <option value="arts">Arts</option>
                    <option value="managment">Managment</option>
                    <option value="design">Design</option>
                </select>
                
                <label for="location">Location:</label>
                <input type="text" id="location" placeholder="Enter location...">

                <label for="type">Internship Type:</label>
                <select id="type">
                    <option value="all">All Types</option>
                    <option value="full-time">Full-Time</option>
                    <option value="part-time">Part-Time</option>
                    <option value="remote">Remote</option>
                    <option value="on-site">On-Site</option>
                </select>
                
                <button type="submit">Apply Filters</button>
            </form>
        </div>

        <div class="content">
            <h2>Internship Listings</h2>

            <div class="internship"> 
                <img src="images/Software Developer Internship.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Software Developer Internship</h3>
                <p><strong>Company:</strong> Tech Innovations Ltd.</p>
                <p><strong>Location:</strong> New York, NY (Remote)</p>
                <p><strong>Duration:</strong> 3 Months</p>
                <p><strong>Field:</strong> Technology</p>
                <button type="submit" href="apply now.php">Apply Now</button>
                </div>
            </div>

            <div class="internship">
                <img src="images/Marketing Intern.webp" width="500" height="300">
                <div class="internship-content">
                <h3>Marketing Intern</h3>
                <p><strong>Company:</strong> Creative Solutions</p>
                <p><strong>Location:</strong> Los Angeles, CA</p>
                <p><strong>Duration:</strong> 6 Months</p>
                <p><strong>Field:</strong> Marketing</p>
                <button>Apply Now</button>
                </div>
            </div>

            <div class="internship">
                <img src="images/Financial Analyst Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Financial Analyst Intern</h3>
                <p><strong>Company:</strong> Global Finance Group</p>
                <p><strong>Location:</strong> Chicago, IL</p>
                <p><strong>Duration:</strong> 4 Months</p>
                <p><strong>Field:</strong> Finance</p>
                <button>Apply Now</button>
                </div>
            </div>

            <div class="internship">
                <img src="images/Engineering Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Engineering Intern</h3>
                <p><strong>Company:</strong> Build It Engineering</p>
                <p><strong>Location:</strong> Austin, TX</p>
                <p><strong>Duration:</strong> 3 Months</p>
                <p><strong>Field:</strong> Engineering</p>
                <button>Apply Now</button>
                </div>
            </div>

            <div class="internship">
                <img src="images/Data Analyst Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Data Analyst Intern</h3>
                <p><strong>Company:</strong> Insight Analytics</p>
                <p><strong>Location:</strong> San Francisco, CA</p>
                <p><strong>Duration:</strong> 6 Months</p>
                <p><strong>Field:</strong> Data Science</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Graphic Design Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Graphic Design Intern</h3>
                <p><strong>Company:</strong> Creative Minds Studio</p>
                <p><strong>Location:</strong> Remote</p>
                <p><strong>Duration:</strong> 4 Months</p>
                <p><strong>Field:</strong> Design</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Social Media Marketing Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Social Media Marketing Intern</h3>
                <p><strong>Company:</strong> Trendy Buzz</p>
                <p><strong>Location:</strong> New York, NY</p>
                <p><strong>Duration:</strong> 3 Months</p>
                <p><strong>Field:</strong> Marketing</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Cybersecurity Intern.jpeg" width="500" height="300">
                <div class="internship-content">
                <h3>Cybersecurity Intern</h3>
                <p><strong>Company:</strong> SecureTech</p>
                <p><strong>Location:</strong> Dallas, TX (Hybrid)</p>
                <p><strong>Duration:</strong> 6 Months</p>
                <p><strong>Field:</strong> Cybersecurity</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Content Writer Intern.webp" width="500" height="300">
                <div class="internship-content">
                <h3>Content Writer Intern</h3>
                <p><strong>Company:</strong> Pen & Pixels</p>
                <p><strong>Location:</strong> Chicago, IL</p>
                <p><strong>Duration:</strong> 2 Months</p>
                <p><strong>Field:</strong> Content Writing</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Mechanical Engineering Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Mechanical Engineering Intern</h3>
                <p><strong>Company:</strong> Advanced Mechanics Inc.</p>
                <p><strong>Location:</strong> Boston, MA</p>
                <p><strong>Duration:</strong> 5 Months</p>
                <p><strong>Field:</strong> Engineering</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/UI and UX Design Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>UI/UX Design Intern</h3>
                <p><strong>Company:</strong> Smooth Interfaces</p>
                <p><strong>Location:</strong> Seattle, WA</p>
                <p><strong>Duration:</strong> 4 Months</p>
                <p><strong>Field:</strong> Design</p>
                <button>Apply Now</button>
                </div>
            </div>

            <div class="internship">
                <img src="images/Artificial Intelligence Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Artificial Intelligence Intern</h3>
                <p><strong>Company:</strong> FutureTech AI</p>
                <p><strong>Location:</strong> Remote</p>
                <p><strong>Duration:</strong> 6 Months</p>
                <p><strong>Field:</strong> Artificial Intelligence</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Business Development Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Business Development Intern</h3>
                <p><strong>Company:</strong> GrowthSpire</p>
                <p><strong>Location:</strong> Denver, CO</p>
                <p><strong>Duration:</strong> 3 Months</p>
                <p><strong>Field:</strong> Business Development</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Web Development Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Web Development Intern</h3>
                <p><strong>Company:</strong> CodeCraft</p>
                <p><strong>Location:</strong> Austin, TX</p>
                <p><strong>Duration:</strong> 4 Months</p>
                <p><strong>Field:</strong> Web Development</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/HR Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>HR Intern</h3>
                <p><strong>Company:</strong> PeopleFirst Solutions</p>
                <p><strong>Location:</strong> Atlanta, GA</p>
                <p><strong>Duration:</strong> 2 Months</p>
                <p><strong>Field:</strong> Human Resources</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Data Engineer Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Data Engineer Intern</h3>
                <p><strong>Company:</strong> DataStream Innovations</p>
                <p><strong>Location:</strong> Remote</p>
                <p><strong>Duration:</strong> 5 Months</p>
                <p><strong>Field:</strong> Data Engineering</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Environmental Research Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Environmental Research Intern</h3>
                <p><strong>Company:</strong> GreenWorld Foundation</p>
                <p><strong>Location:</strong> San Diego, CA</p>
                <p><strong>Duration:</strong> 4 Months</p>
                <p><strong>Field:</strong> Environmental Science</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Mobile App Developer Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Mobile App Developer Intern</h3>
                <p><strong>Company:</strong> AppSphere</p>
                <p><strong>Location:</strong> New York, NY</p>
                <p><strong>Duration:</strong> 3 Months</p>
                <p><strong>Field:</strong> Mobile Development</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Machine Learning Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Machine Learning Intern</h3>
                <p><strong>Company:</strong> NeuralWorks</p>
                <p><strong>Location:</strong> Remote</p>
                <p><strong>Duration:</strong> 6 Months</p>
                <p><strong>Field:</strong> Machine Learning</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Legal Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Legal Intern</h3>
                <p><strong>Company:</strong> Justice League LLP</p>
                <p><strong>Location:</strong> Washington, D.C.</p>
                <p><strong>Duration:</strong> 3 Months</p>
                <p><strong>Field:</strong> Legal</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            <div class="internship">
                <img src="images/Event Management Intern.jpg" width="500" height="300">
                <div class="internship-content">
                <h3>Event Management Intern</h3>
                <p><strong>Company:</strong> Eventify</p>
                <p><strong>Location:</strong> Orlando, FL</p>
                <p><strong>Duration:</strong> 4 Months</p>
                <p><strong>Field:</strong> Event Management</p>
                <button>Apply Now</button>
                </div>
            </div>
            
            
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 CareerWave. All rights reserved.</p>
    </div>
</body>
</html>
