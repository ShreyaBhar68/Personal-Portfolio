<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shreya Bhar</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="head">
            <h1 class="logo">Shreya Bhar</h1>
            <nav>
                <ul>
                    <li><a href="#home" data-item="home">Home</a></li>
                    <li><a href="#about" data-item="about">About</a></li>
                    <li><a href="#skills" data-item="skill">Skills</a></li>
                    <li><a href="#projects" data-item="project">Projects</a></li>
                    <li><a href="#contact" data-item="contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <section id="home" class="hero">
            <div class="container1">
                <img src="public/images/Shreya Bhar.png" alt="Shreya Bhar" class="hero-image">

                <div class="hero-content">
                    <h2>Hello, I'm Shreya</h2>
                    <p class="hero-text">Web Developer | Programmer | Tech Enthusiast</p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn">View My Work</a>
                        <a href="#contact" class="btn">Hire Me</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container2">
                <div class="about-content">
                    <h2>About Me</h2>
                    <p>
                        Hello! I'm Shreya Bhar, a passionate and dedicated web developer with a strong background in
                        computer applications.
                    </p>
                    <div class="about-info">
                        <p>
                            My journey in the tech world began with a curiosity for how things work behind the scenes,
                            which quickly turned into a love for coding and creating innovative solutions. Over the
                            years, I've developed a diverse skill set. I enjoy working on projects that challenge me to
                            think critically and creatively, and I strive to build applications that are not only
                            functional but also visually appealing and user-friendly.
                        </p>
                    </div>
                    <a href="public/pdf/Shreya_Bhar_Resume_bca.pdf" class="btn">My Resume</a>
                </div>
                <div class="about-image">
                    <img src="public/images/artboard-1-removebg-preview.png" alt="Shreya Bhar - Web Developer">
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="skills">
            <div class="container3">
                <h2>Skills</h2>

                <ul class="skill-categories">
                    <li>Technical Skills</li>
                    <li>Programming Languages</li>
                    <li>Frameworks and Libraries</li>
                    <li>Tools and Platforms</li>
                    <li>Soft Skills</li>
                </ul>

                <div class="skill-content">
                    <div class="skill-category">
                        <h3>Technical Skills</h3>
                        <ul>
                            <li>Front-End Development</li>
                            <li>Database Management: MySQL</li>
                            <li>Web Technologies</li>
                            <li>Data Analysis: Pandas, NumPy, Matplotlib</li>
                        </ul>
                    </div>

                    <div class="skill-category">
                        <h3>Programming Languages</h3>
                        <ul>
                            <li>C</li>
                            <li>Python</li>
                            <li>Java</li>
                            <li>JavaScript</li>
                            <li>HTML/CSS</li>
                            <li>SQL</li>
                        </ul>
                    </div>

                    <div class="skill-category">
                        <h3>Frameworks and Libraries</h3>
                        <ul>
                            <li>ReactJS</li>
                            <li>Flask</li>
                            <li>Bootstrap</li>
                        </ul>
                    </div>

                    <div class="skill-category">
                        <h3>Tools and Platforms</h3>
                        <ul>
                            <li>Docker</li>
                            <li>AWS</li>
                            <li>VS Code</li>
                            <li>Git</li>
                        </ul>
                    </div>

                    <div class="skill-category">
                        <h3>Soft Skills</h3>
                        <ul>
                            <li>Team Collaboration</li>
                            <li>Problem Solving</li>
                            <li>Time Management</li>
                            <li>Communication</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="projects">
            <div class="container4">
                <h2>Projects</h2>
                <div class="card-rotator">
                    <div class="card">
                        <h3>CropZen</h3>
                        <video src="public/videos/crop.mp4" type="video/mp4" controls></video>
                        <p>
                            - Developed a Flask app to visualize crop data and implemented a system to monitor crop
                            and soil informaton.
                        </p>
                        <p>
                            - Craeted a system that automatically updates weather information based on the user's
                            current location.
                        </p>
                        <p>
                            - Utilized APIs to fetch real-time weather data and displayed it on a user-friendly
                            radar chart and dashboard.
                        </p>
                        <h5>Technologies used: HTML, CSS, JavaScript, Flask, PHP, MySQL</h5>
                        <a href="http://github.com/ShreyaBhar68/CropZen" target="_blank">GitHub Repo</a>
                    </div>
                    <div class="card">
                        <h3>Ashanir</h3>
                        <img src="public/images/ash.jpg"></img>
                        <p>
                            - This E-Commerce Website is built using HTML and CSS to provide a visually appealing
                            and user-friendly online shopping experience.
                        </p>
                        <p>
                            - The site features a modern and responsive design, ensuring it looks great on both
                            desktop and mobile devices.
                        </p>
                        <p>
                            - Users can browse products, view detailed descriptions, and add items to their shopping
                            cart.
                        </p>
                        <h5>Technologies used: HTML, CSS</h5>
                        <a href="http://github.com/ShreyaBhar68/E-Commerce-Website" target="_blank">GitHub Repo</a>
                    </div>
                    <div class="card">
                        <h3>Stone-Paper-Scissors Mini Game</h3>
                        <img src="public/images/stone.jpg"></img>
                        <p>
                            - A simple yet engaging Stone-Paper-Scissors game built using JavaScript logic.
                        </p>
                        <p>
                            - The game features an intuitive user interface and responsive design, providing an
                            enjoyable experience.
                        </p>
                        <h5>Technologies used: HTML, CSS, JavaScript</h5>
                        <a href="http://github.com/ShreyaBhar68/Stone-Paper-Scissors-Mini-Game" target="_blank">GitHub
                            Repo</a>
                    </div>
                    <div class="card">
                        <h3>Tic-Tac-Toe</h3>
                        <img src="public/images/tict.jpg"></img>
                        <p>
                            - A classic Tic-Tac-Toe game developed using JavaScript logic.
                        </p>
                        <p>
                            - The game offers a clean and interactive design, allowing users to play against a
                            computer opponent.
                        </p>
                        <p>
                            - This project highlights the ability to create dynamic and interactive web
                            applications.
                        </p>
                        <h5>Technologies used: HTML, CSS, JavaScript</h5>
                        <a href="http://github.com/ShreyaBhar68/Tic-Tac-Toe" target="_blank">GitHub Repo</a>
                    </div>
                    <div class="card">
                        <h3>Travaco</h3>
                        <video src="public/videos/travaco.mp4" type="video/mp4" controls></video>
                        <p>
                            - Travaco is a travel website designed to provide users with information about various
                            travel destinations.
                        </p>
                        <p>
                            - This site features a clean and straightforward layout, making it
                            easy for users to navigate and find the information they need.
                        </p>
                        <h5>Technologies used: HTML, CSS, JavaScript, PHP, MySQL</h5>
                        <a href="http://github.com/ShreyaBhar68/Travaco" target="_blank">GitHub Repo</a>
                    </div>
                    <div class="card">
                        <h3>Calculator</h3>
                        <img src="public/images/calco.jpg"></img>
                        <p>
                            - A basic calculator application created using JavaScript logic.
                        </p>
                        <p>
                            - The calculator supports basic arithmetic operations and features a simple,
                            user-friendly interface.
                        </p>
                        - This project demonstrates proficiency in creating functional web applications.
                        </p>
                        <h5>Technologies used: HTML, CSS, JavaScript</h5>
                        <a href="http://github.com/ShreyaBhar68/Calculator" target="_blank">GitHub Repo</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <div class="container5">
                <h2>Contact Me</h2>
                <form id="contactForm" action="contact.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    <button class="btn" type="submit">Send</button>
                </form>
                <div class="contact-info">
                    <p><i class="fas fa-envelope"></i> Email: shreyabhar3@gmail.com</p>
                    <p><i class="fab fa-linkedin"></i> LinkedIn: <a href="https://www.linkedin.com/in/shreya-bhar-b4413721b/" target="_blank">Shreya Bhar</a></p>
                    <p><i class="fab fa-github"></i> GitHub: <a href="https://github.com/ShreyaBhar68/" target="_blank">ShreyaBhar68</a></p>
                    <p><i class="fas fa-map-marker-alt"></i> Location: Kolkata, India</p>
                </div> 
                <div id="successMessage" class="success-message" style="display: none;">
                    Message sent successfully!
                </div>                 
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container6">
            <p>&copy; 2023-2024 Shreya Bhar. All rights reserved.</p>
            <div class="social-links">
                <a href="https://www.linkedin.com/in/shreya-bhar-b4413721b/" target="_blank">LinkedIn</a>
                <a href="https://github.com/ShreyaBhar68/" target="_blank">GitHub</a>
                <a href="https://twitter.com/yourtwitterhandle" target="_blank">Twitter</a>
            </div>
        </div>
    </footer>

    <script src="public/js/main.js"></script>
</body>

</html>