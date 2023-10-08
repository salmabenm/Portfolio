<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>BENMOUSSA - Portfolio</title>
    <link rel="icon" href="images/logome.png">
</head>

<body>

    <header>
        <nav class="navbar">
        <div class="logo">
          BENMOUSSA
        </div>
            <ul class="nav-links">
                <li><a href="#home-section">Home</a></li>
                <li><a href="#experience-section">Experience</a></li>
                <li><a href="#training-section">Training</a></li>
                <li><a href="#certifications-section">Certifications</a></li>
                <li><a href="#projects-section">Projects</a></li>
                <li><a href="#skills-section">Skills</a></li>
                <li><a href="#footer">Contact</a></li>
            </ul>
            
        </nav>
    </header>
    <section class="home-section" id="home-section">
        <div class="home-content">
            <div class="intro">
                <img src="images/salma.png" alt="My Photo">
                <div class="intro-text">
                    <h1>BENMOUSSA Salma</h1>
                    <p>Web Developer and IT Enthusiast</p>
                    <div class="icon-links">
                      <a href="https://github.com/salmabenm"><i class="fab fa-github"></i></a>
                      <a href="https://www.linkedin.com/in/salma-benmoussa-a60396250"><i class="fab fa-linkedin"></i></a>
                      <a href="mailto:salma.benmoudssa@gmail.com"><i class="fa fa-envelope"></i></a>
                      <a href="tel:+212689238310"><i class="fab fa-whatsapp"></i></a>
                  </div></br>
                  <a href="about.php">
                        <button class="btn">About Me</button>
                      </a>
                </div>
               
            </div>
            
        </div>
    </section>
    <section class="experience-section" id="experience-section">
      <div class="section-header">
          <h2>EXPERIENCE</h2>
      </div>
      <div class="experience-content">
          <div class="experience-item">
              <div class="experience-logo">
                  <img src="images/logo.png" alt="BC Skills Logo">
              </div>
              <div class="experience-details">
                  <h3>Web Developer</h3>
                  <p class="date"> 17 July 2023 - 17 August 2023</p>
                  <p>BC Skills Group · Internship</p>
                  <p>Implementation of a web application
                    inventory management under the framework
                    “Laravel”</p>
              </div>
             
          </div>
      </div>
  </section>
  <section class="training-section" id="training-section">
    <div class="section-header">
      <h2 class="proj">TRAINING</h2>
    </div>
    <div class="training-container">
      <div class="training-box">
        <div class="training-content">
          <img class="training-image" src="images/ensa.png" alt="ENSAS Image">
          <div class="training-details">
            <h3>ENSAS | Computer Engineering</h3>
            <p class="date">2020 - Currently</p>
            <p>National School of Applied Sciences in Safi (ENSAS) is a prestigious institution known for its engineering programs.</p>
          </div>
        </div>
      </div>
      
      <div class="training-box">
        <div class="training-content">
          <img class="training-image" src="images/EST.png" alt="EST Image">
          <div class="training-details">
            <h3>EST | Computer Engineering</h3>
            <p class="date">2019 - 2020</p>
            <p>Higher School of Technology in Safi (EST) provides high-quality education in various technological fields and focuses on applied sciences and technology.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="certifications-section" id="certifications-section">
        <div class="section-header">
            <h2 >CERTIFICATIONS</h2>
        </div>
    
        <div class="certifications-container">
            <div class="certification-box">
                <img class="certification-image" src="images/cpp.png" alt="C++ Certification">
                <h3>C++ Certification</h3>
                <a href="https://www.sololearn.com/certificates/CC-NJTCNUQT">
                    <button class="certification-button"><i class="fas fa-link"></i> View Certification</button>
                </a>
            </div>
            <div class="certification-box">
                <img class="certification-image" src="images/js.png" alt="JS Certification">
                <h3>JS Certification</h3>
                <a href="https://www.sololearn.com/certificates/CC-MUDSEFZG">
                    <button class="certification-button"><i class="fas fa-link"></i> View Certification</button>
                </a>
            </div>
            <div class="certification-box">
                <img class="certification-image" src="images/web.png" alt="Web Development Certification">
                <h3>Web Development Certification</h3>
                <a href="https://www.sololearn.com/certificates/CT-JRJO0GIN">
                    <button class="certification-button"><i class="fas fa-link"></i> View Certification</button>
                </a>
            </div>
            <div class="certification-box">
                <img class="certification-image" src="images/React.png" alt="React | Redux Certification">
                <h3>React | Redux Certification</h3>
                <a href="https://www.sololearn.com/certificates/CC-JA5AYL8C">
                    <button class="certification-button"><i class="fas fa-link"></i> View Certification</button>
                </a>
            </div>
            <div class="certification-box">
                <img class="certification-image" src="images/python.PNG" alt="Python Certification">
                <h3>Python Certification</h3>
                <a href="#python_Certification">
                    <button class="certification-button"><i class="fas fa-link"></i> View Certification</button>
                </a>
            </div>
            
        </div>
        <div class="pagination">
            <button class="prev-button" onclick="showPrevCertifications()">Previous</button>
            <button class="next-button" onclick="showNextCertifications()">Next</button>
        </div>
    </section>

  <section class="projects-section" id="projects-section">
  <div class="section-header">
    <h2 class="proj">PROJECTS</h2>
  </div>
  <div class="project-container">
    <div class="project-card">
      <img class="project-image" src="images/mas1.jpg" alt="Project 1">
      <div class="project-details">
        <h3>MasForU</h3>
        <p class="text">This project introduces two web applications, "MasForU" and "NurseryMas," aimed at delivering an enjoyable online shopping experience for premium floral and green products. The primary emphasis lies in ensuring user-friendliness, responsive design, streamlining the purchasing process, and ensuring robust security measures. These applications were built from the ground up, utilizing HTML, CSS, JavaScript, and PHP to provide effective solutions catering to busy individuals seeking to buy flowers and plants online, with room for potential future improvements.</p>
        <p class="date">COLLABORATER :<br> ABDOUNI Asmaa | BELAABDOULI Meriame</p>
        <a href="https://github.com/salmabenm/Flower_Shop_MAS.git" class="project-button">View on GitHub</a>
      </div>
    </div>
    <div class="project-card">
      <img class="project-image" src="images/bc3.jpg" alt="Project 2">
      <div class="project-details">
        <h3>Inventory Management</h3>
        <p class="text">This work chronicles my internship project as a Computer Engineering student at the National School of Applied Sciences of Safi . The project's aim was to create an application for efficient stock management, simplifying product, client, and supplier operations. Developed using Laravel, HTML, CSS, JavaScript, and PHP, the application offers a comprehensive supervision interface, ensuring smooth stock flow visualization. It enables quick updates and modifications while maintaining security. In summary, this report covers the project's overview, context, achievements, and future prospects.</p>
        <p class="date">INTERNSHIP : BC Skills</p>
        <a href="https://github.com/salmabenm/Gestion_Stock.git" class="project-button">View on GitHub</a>
      </div>
    </div>
    <div class="project-card">
      <img class="project-image" src="images/chatBot3.PNG" alt="Project 3">
      <div class="project-details">
        <h3>Chat Bot</h3>
        <p class="text">
This project encompasses the stages of chatbot development, highlighting the technologies employed. We pursued two distinct approaches: leveraging Dialogflow for its simplicity and efficiency in natural language processing, and crafting a fully customizable chatbot from scratch using Python, PyTorch, and NLTK. Through this project, I improved my programming and natural language processing (NLP) skills while refining conversational interface design. Crucially, it enhanced "Salma" coffee shop's services by offering an interactive and efficient way for users to access vital information.</p>
        <p class="date">SUMMER PROJECT : Coffee shop</p>
        <a href="https://github.com/salmabenm/ChatBot.git" class="project-button">View on GitHub</a>
      </div>
    </div>
  </div>
</section>
<section class="skills-section" id="skills-section">
  <div class="section-header">
    <h2 >SKILLS</h2>
    
  </div>
<div class="slideshow-container">
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <div class="mySlides fade">
    <div class="skills-container">
      
      <div class="skill">
        <img src="images/c.jpg" alt="">
        <h2>C</h2>
      </div>
      <div class="skill">
        <img src="images/py.jpg" alt="">
        <h2>Python</h2>
      </div>
      <div class="skill">
        <img src="images/c++.jpg" alt="">
        <h2>C++</h2>   
       </div>
      <div class="skill">
        <img src="images/matlab.jpg" alt="">
        <h2>Matlab</h2>
      </div>
      <div class="skill">
        <img src="images/html.png" alt="">
        <h2>HTML</h2>
      </div>
    </div>
  </div>
  </section>
   
  <div class="mySlides fade">
    <div class="skills-container">
  
     <div class="skill">
        <img src="images/ss.png" alt="">
        <h2>CSS</h2>
     </div>
     <div class="skill">
        <img src="images/jslogo.png" alt="">
        <h2>JavaScript</h2>
     </div>
     <div class="skill">
        <img src="images/php.png" alt="">
        <h2>PHP</h2>
     </div>
     <div class="skill">
        <img src="images/laravel.png" alt="">
        <h2>Laravel</h2>
     </div>
     <div class="skill">
        <img src="images/jav.png" alt="">
        <h2>Java</h2>
     </div>
    </div>
  </div>  

    
  <div class="mySlides fade">
   <div class="skills-container">
   
    <div class="skill">
        <img src="images/re.png" alt="">
        <h2>React</h2>
    </div>
    <div class="skill">
        <img src="images/sql.png" alt="">
        <h2>SQL</h2>
    </div>
    <div class="skill">
        <img src="images/linux.jpg" alt="">
        <h2>Linux</h2>
    </div>
    <div class="skill">
        <img src="images/power.jpg" alt="">
        <h2>PowerAMC</h2>
    </div>
    <div class="skill">
        <img src="images/github.png" alt="">
        <h2>GitHub</h2>
    </div>
  </div>
  
</div>

<div class="footer" id="footer">
  <div class="section-header">
    <h2 class="proj">CONTACT ME</h2>
  </div>
        <p>If you want to contact me, feel free to reach out through any of the following platforms :</p>
        <div class="icon-links">
                      <a href="tel:+212689238310"><i class="fab fa-whatsapp"></i></a>
                      <a href="https://www.linkedin.com/in/salma-benmoussa-a60396250"><i class="fab fa-linkedin"></i></a>
                      <a href="mailto:salma.benmoudssa@gmail.com"><i class="fa fa-envelope"></i></a>
                      <a href="https://facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                      <a href="https://instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                      <a href="https://github.com/salmabenm"><i class="fab fa-github"></i></a>
        </div></br>
        <p>Created by BENMOUSSA SALMA | All Rights Reserved  &copy; 2023</p>
</div>

<script src = "skills.js"></script>
<script src = "certif.js"></script>
</body>
</html>