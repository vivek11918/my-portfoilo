<?php
$servername = "localhost"; // usually localhost
$username   = "root";      // your MySQL username
$password   = "";          // your MySQL password
$dbname     = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO pform (name, email, subject, message) 
        VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Message sent successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>VivekDev</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons --
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EasyFolio
  * Template URL: https://bootstrapmade.com/easyfolio-bootstrap-portfolio-template/
  * Updated: Feb 21 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">VivekDev</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About me</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#services">Services</a></li>
           <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h2>Building Modern Websites with Clean Code</h2>
            <p class="lead">Crafting sleek, responsive websites using the latest technologies and best practices in web development.</p>
            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
              <a href="#portfolio" class="btn btn-primary">View My Work</a>
              <a href="#contact" class="btn btn-outline">Let's Connect    </a>
            </div>
            <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
              <div class="stat-item">
                <span class="stat-number">Fresher</span>
                <span class="stat-label">Years Experience</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">5</span>
                <span class="stat-label">Projects Completed</span>
              </div>

            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image">
              <img src="assets/img/profile/profile-1.webp" alt="Portfolio Hero Image" class="img-fluid" data-aos="zoom-out" data-aos-delay="300">
              <div class="shape-1"></div>
              <div class="shape-2"></div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About me</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>  I'm a passionate and self-motivated web developer with a strong foundation in HTML, CSS, JavaScript, and modern frameworks like Bootstrap. 
    I enjoy building responsive websites and constantly learning new technologies to enhance my skills.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="..//EasyFolio/photo1.png"  alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <span class="subtitle">About Me</span>

              <h2>UI/UX Designer &amp; Web Developer</h2>

              <p class="lead mb-4">I’m a passionate web developer with a strong foundation in front-end and back-end technologies. I specialize in building dynamic, responsive, and user-friendly websites and applications using modern frameworks.</p>

              <p class="mb-4">With a love for clean code and problem-solving, I turn complex requirements into elegant web solutions that drive results.</p>

              <div class="personal-info">
                <div class="row g-4">
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Name</span>
                      <span class="value">Vivek Kumar</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Phone</span>
                      <span class="value">+91 9027349857</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Age</span>
                      <span class="value">21 Years</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Email</span>
                      <span class="value">vivek11918email@.com</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Occupation</span>
                      <span class="value">Web developer</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Nationality</span>
                      <span class="value">Indian</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="signature mt-4">
                <div class="signature-image">
                  <img src="#" alt="" class="img-fluid">
                </div>
                <div class="signature-info">
                  <h4>Vivek Kumar</h4>
                  <p>Passionate Coder</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box">
              <h3>HTML</h3>
              <p>Proficient in writing semantic, accessible, and well-structured HTML for responsive web pages.</p>
              <span class="text-end d-block">60%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box">
              <h3>CSS</h3>
              <p>Experienced in crafting visually appealing layouts using Flexbox, Grid, and media queries.</p>
              <span class="text-end d-block">90%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box">
              <h3>JavaScript</h3>
              <p>Good understanding of core concepts like DOM manipulation, functions, and event handling.</p>
              <span class="text-end d-block">80%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box">
              <h3>Bootstrap</h3>
              <p>Skilled in using Bootstrap framework to build responsive, mobile-first, and modern web layouts quickly.</p>
              <span class="text-end d-block">55%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>"Turning ideas into clean, scalable code with passion and precision."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12">
            <div class="resume-wrapper">
              <div class="resume-block" data-aos="fade-up">
                <h2>Work Experience</h2>
                <p class="lead"> Hands-on experience in front-end development, building user-friendly and responsive web applications with modern tools and technologies.</p>

                <div class="timeline">
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company">RPRD GROUP OF Componies</h4>
                      <span class="period">15 June- Current</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Web Developer</h3>
                      <p class="description">Developed and deployed responsive web applications using React.js, Node.js, and MongoDB
                        <br>
                          Integrated RESTful APIs and third-party services to enhance functionality
                        <br>
                          Led code reviews, sprint planning, and implemented CI/CD pipelines
                        <br>
                          Optimized performance across mobile and desktop platforms
                      </p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-left">
                      <h4 class="company">CodSoft</h4>
                      <span class="period">20 Dec 2024 - 20 Jan 2024</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Web Developer</h3>
                      <p class="description">
                        A Web Developer builds and maintains websites and web applications using coding languages like HTML, CSS, JavaScript, and backend technologies.
                      </p>
                      <ul>
                        <li></li>
                        <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                        <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                        <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                      </ul>
                      <p></p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-left">
                      <h4 class="company">Internpe</h4>
                      <span class="period">05 july 2023 - 05 Aug 2023</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Python Developer</h3>
                      <p class="description" Created multiple beginner-friendly Python projects like a calculator, to-do list, and number guessing game to practice core concepts. ></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="resume-block" data-aos="fade-up" data-aos-delay="100">
                <h2>My Education</h2>
                <p class="lead">A journey of continuous learning, strong fundamentals, and technical growth in computer science and mathematics.</p>
                <div class="timeline">
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company">Dr.Abul Kalam Technical University</h4>
                      <span class="period">2022-2026</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position"></h3>
                      <p class="description">Pursuing B.Tech in Computer Science, focusing on software development, data structures, algorithms, and modern web technologies.</p>
                    </div>
                  </div>
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-left">
                      <h4 class="company">K.L.S.V.M. Inter College</h4>
                      <span class="period">2022</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Intermediate</h3>
                      <p class="description"></p>Completed 12th with Physics, Chemistry, and Mathematics.</p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-left">
                      <h4 class="company">M.V.S.S. Inter College</h4>
                      <span class="period">2020</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">High School</h3>
                      <p class="description">Completed 10th with a strong foundation in mathematics, science.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
  <!-- End Portfolio Item -->

           <!-- /Portfolio Section -->

    <!-- Testimonials Section -->
   <!-- /Testimonials Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>I’m a passionate college student learning full-stack web development and building real-world projects to sharpen my skills.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h2 class="fw-bold mb-4 servies-title">Responsive Web Design</h2>
            <p class="mb-4">Creating modern websites that work perfectly on mobile, tablet, and desktop.</p>
            <a href="#" class="btn btn-outline-primary">See all services</a>
          </div>
          <div class="col-lg-8">
            <div class="row g-4">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item">
                  <i class="bi bi-activity icon"></i>
                  <h3><a href="service-details.html">Front-End Development</a></h3>
                  <p>Building clean, interactive user interfaces using HTML, CSS, Bootstrap, and JavaScript.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item">
                  <i class="bi bi-easel icon"></i>
                  <h3><a href="service-details.html">Back-End Development</a></h3>
                  <p>Creating server-side logic and APIs using PHP, Node.js, or Python (Django/Flask).</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item">
                  <i class="bi bi-broadcast icon"></i>
                  <h3><a href="service-details.html">Website Hosting & Deployment</a></h3>
                  <p>Deploying websites on platforms like GitHub Pages, Vercel, or Netlify.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item">
                  <i class="bi bi-bounding-box-circles icon"></i>
                  <h3><a href="service-details.html">Basic SEO Optimization</a></h3>
                  <p>Improving visibility of websites on search engines using on-page SEO techniques.</p>
                </div>
              </div><!-- End Service Item -->

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Here are some quick answers about my skills and projects.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>What technologies do you use?</h3>
                <div class="faq-content">
                  <p>I use HTML, CSS, JavaScript, Bootstrap, PHP, MySQL, Git, and I'm learning React and Node.js.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Can you work on both front-end and back-end?</h3>
                <div class="faq-content">
                  <p>Yes, I’m learning full-stack development and have built projects covering both areas.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Where can I see your projects?</h3>
                <div class="faq-content">
                  <p>You can visit my GitHub profile or the Portfolio section of this website.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>How much experience do you have in web development?</h3>
                <div class="faq-content">
                  <p>I’ve been learning and building projects for over 1–2 years during my college, including personal, academic, and freelance work.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Do you work with teams?</h3>
                <div class="faq-content">
                  <p>Yes, I’ve done group college projects and enjoy collaborating using tools like Git and Trello.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Do you contribute to open-source projects?</h3>
                <div class="faq-content">
                  <p>Yes, I’ve started contributing to open-source on GitHub to improve my skills and collaborate with other developers.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3">Contact</div>
              <h2 class="display-5 mb-4">Let’s Connect and Build Something Great Together</h2>
              <p class="lead mb-4">If you have a website idea, want to collaborate, or need help with a project, feel free to reach out. I’m always open to learning and working on exciting opportunities.</p>

              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3"></i>
                  <span>vivek11918@gmail.com</span>
                </div>

                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3"></i>
                  <span>+91 9027349857</span>
                </div>

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3"></i>
                  <span>Krishna Institute Of Technology,Kanpur</span>
                </div>

                <a href="#" class="map-link d-inline-flex align-items-center">
                  Open Map
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
              <div class="card-body p-4 p-lg-5">

                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">

                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>

                    <div class="col-12 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>

                      <button type="submit" class="btn btn-submit w-100">Submit Message</button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">VivekDev</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/vivek-kumar-4602a8299?"><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Vivek Kumar</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>