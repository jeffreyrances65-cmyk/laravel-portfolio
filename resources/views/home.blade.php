<!DOCTYPE html>
<html>
<head>
    <title>Resume Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0f172a;
            color: white;
            margin: 0;
        }

        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* LEFT SIDEBAR */
        .sidebar {
            width: 250px;
            background: #1e293b;
            padding: 20px;
        }

        .sidebar button {
            width: 100%;
            margin-bottom: 10px;
            background: transparent;
            border: 1px solid #38bdf8;
            color: white;
            padding: 10px;
            border-radius: 8px;
        }

        .sidebar button:hover {
            background: #38bdf8;
            color: black;
        }

        /* RIGHT CONTENT */
        .content {
            flex: 1;
            padding: 40px;
        }

        .card-box {
            background: #1e293b;
            padding: 20px;
            border-radius: 15px;
        }

        .profile-img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 4px solid #38bdf8;

    object-fit: cover;
    object-position: center 15%;

    display: block;
    margin: 0 auto;
}

        .badge {
            margin: 3px;
        }
    </style>
</head>
<body>

<div class="wrapper">

    <!-- SIDEBAR -->
   <div class="sidebar">
    <h2>Personal Information</h2>

    <button onclick="showSection('about')">About Me</button>
    <button onclick="showSection('skills')">Skills</button>
    <button onclick="showSection('education')">Education</button>
    <button onclick="showSection('work')">Work Experience</button>
    <button onclick="showSection('projects')">Projects</button>
    <button onclick="showSection('contact')">Contact</button>
</div>

    <!-- CONTENT -->
    <div class="content">

        <!-- PROFILE -->
        <div class="card-box mb-3 text-center">
            <img src="/Rances.png" class="profile-img">
            <h2>JEFFREY RANCES</h2>
            <p class="text-info">Address | Sariaya, Quezon, Philippines</p>
        </div>

        <!-- DYNAMIC SECTIONS -->
        <div class="card-box" id="displayBox">

            <h3>Hi! Welcome</h3>
            <p>I'm Jeffrey Rances, a passionate Laravel Developer and Web Developer.</p>

        </div>

    </div>
</div>

<script>
function showSection(section) {
    let content = document.getElementById("displayBox");

    if (section === "about") {
        content.innerHTML = `
            <h3>About Me</h3>
            <p>I am a motivated and detail-oriented web developer with a strong focus on building responsive and user-friendly web applications using modern technologies such as Laravel, PHP, Bootstrap, and MySQL. I am passionate about creating clean, efficient, and scalable code while continuously improving my skills in both frontend and backend development. With experience in academic and on-the-job training projects, I am eager to contribute to real-world development teams, solve complex problems, and grow as a full-stack developer in a professional environment.</p>
        `;
    }

    if (section === "skills") {
        content.innerHTML = `
            <h2>TECHNICAL SKILLS</h2>

            <p><strong>Programming: HTML, CSS, JavaScript, PHP</strong></p>
            <p><strong>Framework: React, (basic) Laravel (basic)</strong></p>
            <p><strong>Database: MySQL</strong></p>
            <p><strong>Tools: Git, VS Code, XAMPP</strong></p>
            <p><strong>Other: Basic Networking, Troubleshooting</strong></p>




            <h2>Soft Skills</h2>

            <p><strong>Time Management</strong></p>
            <p><strong>Problem Solving Skills</strong></p>
            <p><strong>Team Collaboration</strong></p>
            <p><strong>Continuous Learning & Adaptability</strong></p>
            <p><strong>Critical Thinking</strong></p>
            <p><strong>Attention to Detail</strong></p>
            <p><strong>Communication Skills</strong></p>

        `;
    }

    if (section === "education") {
        content.innerHTML = `
            <h3>Education</h3>
            <p><strong>BS Information Technology</strong><br>CSTC (2022 - 2026)</p>
            <p><strong>Science, Technology, Engineering, and Mathematics.</strong><br>CSTC (2020 - 2022)</p>
            <p><strong>Junior High School</strong><br>CNHS (2011 - 2020)</p>
            <p><strong>Elementary School</strong><br>BES (2005 - 2011)</p>
        `;
    }

    if (section === "work") {
        content.innerHTML = `
            <h3>Work Experience</h3>
            <p><strong>OJT Frontend Developer</strong><br>
            CSTC</p>

            <ul>
                <li>Built responsive UI using Bootstrap</li>
                <li>Assisted in frontend development</li>
                <li>Improved website layout and design</li>
            </ul>
        `;
    }


   if (section === "projects") {
    content.innerHTML = `
        <h3>Projects</h3>

        <p><strong>Portfolio Website</strong><br>
        A personal portfolio website built using Laravel, Bootstrap, HTML, CSS, and JavaScript to showcase my profile, skills, education, work experience, and contact information in a professional and responsive design.</p>

        <p><strong>Repair Shop Management System</strong><br>
        A web-based system designed to manage customer repairs, service records, technician assignments, and repair status tracking for a repair Autoshop.</p>

        <p><strong>Order Management System</strong><br>
        A database-driven system used to handle customer orders, product listings, order tracking, and transaction management with an organized and user-friendly interface.</p>
    `;
}

    if (section === "contact") {
        content.innerHTML = `
            <h3>Contact</h3>
            <p>Email: jeffreyrances65@gmail.com</p>
            <p>Phone: 0992-936-6930</p>
            <p>GitHub: jeffreyrances65-cmyk</p>
        `;
    }
}
</script>

</body>
</html>
