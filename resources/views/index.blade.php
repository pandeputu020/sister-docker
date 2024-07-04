<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Header */
        header {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* About Section */
        .about {
            background: #fff;
            padding: 50px 0;
            text-align: center;
        }

        .about h2 {
            margin-bottom: 20px;
        }

        .about p {
            width: 70%;
            margin: 0 auto;
        }

        /* Projects Section */
        .projects {
            background: #333;
            color: #fff;
            padding: 50px 0;
            text-align: center;
        }

        .projects h2 {
            margin-bottom: 20px;
        }

        .project-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .project {
            background: #444;
            padding: 20px;
            margin: 10px;
            width: 30%;
            box-sizing: border-box;
        }

        .project h3 {
            margin-top: 0;
        }

        .project p {
            margin: 0;
        }

        /* Contact Section */
        .contact {
            background: #fff;
            padding: 50px 0;
            text-align: center;
        }

        .contact h2 {
            margin-bottom: 20px;
        }

        .contact p {
            margin: 0;
        }

        .contact a {
            color: #333;
            text-decoration: none;
            font-weight: 600;
        }

        .contact a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>GO WEB</h1>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="about" class="about">
        <div class="container">
            <h2>About Me</h2>
            <p>Hello! I am Pande, a passionate developer with expertise in web development and AI. I love creating innovative solutions and building beautiful websites.</p>
        </div>
    </section>
    <section id="projects" class="projects">
        <div class="container">
            <h2>Projects</h2>
            <div class="project-list">
                <div class="project">
                    <h3>Project 1</h3>
                    <p>Description of Project 1. It is a great project that showcases my skills.</p>
                </div>
                <div class="project">
                    <h3>Project 2</h3>
                    <p>Description of Project 2. It is a great project that showcases my skills.</p>
                </div>
                <div class="project">
                    <h3>Project 3</h3>
                    <p>Description of Project 3. It is a great project that showcases my skills.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact</h2>
            <p>If you would like to get in touch, please email me at <a href="mailto:ilmu@komputer.com">Pande@Komputer.com</a></p>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Pande Sanjaya. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
