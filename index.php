<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Portofolio Website - CodeCraftedWeb</title>
</head>
<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Wiwit W</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#portofolio" class="nav__link">Portofolio</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hi,<br>I'm <span class="home__title-color">Wiwit Widayanti</span><br>UI/UX Designerr</h1>

                <a href="#" class="button">Contact</a>
            </div>

            <div class="home__social">
                <a href="" class="home__social-icon"><i class='bx bxl-instagram'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-twitter' ></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
            </div>

            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        <image class="home__blob-img" x="50" y="60" href="prof.png"/>
                    </g>
                </svg>
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="about.png" alt="">
                </div>
                    
                <div>
                    <h2 class="about__subtitle">I'm Wiwit Widayanti</h2>
                    <p class="about__text">I'm Wiwit Widayanti, a multidisciplinary designer fuelled by endless curiosity and a thirst for innovation. From a young age, I was enamoured with the power of visual storytelling, fascinated by design's ability to evoke emotions, spark connections and inspire action. 
                        It is this fascination that drives me to constantly explore and push the boundaries of my craft. With a background as a student focusing on UI/UX Design, I have honed my skills in various aspects of design, from graphic design and illustration to web development and user experience.</p>           
                </div>                                   
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">          
                <div>
                    <h2 class="skills__subtitle">Soft Skills</h2>
                    <p class="skills__text">Soft skills are non-technical skills related to social interaction, communication, leadership and other interpersonal skills. These skills enable individuals to interact effectively with others, work in teams, resolve conflicts and show empathy. Examples of soft skills include verbal and non-verbal communication, adaptability, leadership, teamwork and problem solving.</p>

                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name">Public Speaking</span>
                        </div>
                        <div class="skills__bar skills__html">

                        </div>
                        <div>
                            <span class="skills__percentage">90%</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name">Creativity</span>
                        </div>
                        <div class="skills__bar skills__css">
                                
                        </div>
                        <div>
                            <span class="skills__percentage">75%</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name">Team Collaboration</span>
                        </div>
                        <div class="skills__bar skills__js">
                                
                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name">Problem Solving</span>
                        </div>
                        <div class="skills__bar skills__ux">
                        </div>
                        <div>
                            <span class="skills__percentage">80%</span>
                        </div>
                    </div>
                </div>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Hard Skills</h2>
                        <p class="skills__text"> Hard skills are concrete and measurable abilities, often acquired through formal education, training or work experience. Hard skills are usually directly related to a specific job or occupation and can be objectively measured.</p>
    
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML</span>
                            </div>
                            <div class="skills__bar skills__html">
    
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
    
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS</span>
                            </div>
                            <div class="skills__bar skills__css">
                                    
                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                    
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">UI/UX</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <!--===== PORTOFOLIO =====-->

        <section class="porto section" id="porto">
            <h2 class="section-title">Portofolio</h2>

            <div class="porto__container bd-grid">
                <a href="" class="porto__img">
                    <img src="port1.png" alt="">
                </a>
                <a href="" class="porto__img">
                    <img src="port2.png" alt="">
                </a>
                <a href="" class="porto__img">
                    <img src="port3.png" alt="">
                </a>
            </div>
        </section>

        <section class="porto section" id="porto">
            <h2 class="section-title">Certification</h2>

            <div class="porto__container bd-grid">
                <a href="" class="porto__img">
                    <img src="cer1.png" alt="">
                </a>
                <a href="" class="porto__img">
                    <img src="cer2.png" alt="">
                </a>
                <a href="" class="porto__img">
                    <img src="cer3.png" alt="">
                </a>
            </div>
        </section>

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>
            <div class="contact__container bd-grid">
        <div class="contact" id="contact">
    <div class="contactme">
        <p> if you want to know more information about me, </p> 
        <p> Please contact me bellow.</p>
    </div>

    <div class="container">
        <div class="contactinfo">
            <div class="kotak">
                <div class="icon"></div>
                <div class="text">
                    <h3> <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M12 16.475q2.475-2 3.738-3.85Q17 10.775 17 9.15q0-1.4-.512-2.388-.513-.987-1.263-1.6-.75-.612-1.625-.887T12 4q-.725 0-1.6.275-.875.275-1.625.887-.75.613-1.262 1.6Q7 7.75 7 9.15q0 1.625 1.262 3.475 1.263 1.85 3.738 3.85ZM12 19q-3.525-2.6-5.263-5.05Q5 11.5 5 9.15q0-1.775.638-3.113Q6.275 4.7 7.275 3.8q1-.9 2.25-1.35Q10.775 2 12 2t2.475.45q1.25.45 2.25 1.35 1 .9 1.638 2.237Q19 7.375 19 9.15q0 2.35-1.738 4.8Q15.525 16.4 12 19Zm0-8q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11ZM5 22v-2h14v2Zm7-12.85Z"/></svg> Address</h3> 
                    <p> Tangerang, Indonesia </p>
                </div>
            </div>

            <div class="kotak">
                <div class="icon"></div>
                <div class="text">
                    <h3> <?xml version="1.0" ?><svg width="24px" height="24px" viewBox="0 0 32 32" id="Camada_1" style="enable-background:new 0 0 32 32;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M22.3,8.4c-0.8,0-1.4,0.6-1.4,1.4c0,0.8,0.6,1.4,1.4,1.4c0.8,0,1.4-0.6,1.4-1.4C23.7,9,23.1,8.4,22.3,8.4z"/><path d="M16,10.2c-3.3,0-5.9,2.7-5.9,5.9s2.7,5.9,5.9,5.9s5.9-2.7,5.9-5.9S19.3,10.2,16,10.2z M16,19.9c-2.1,0-3.8-1.7-3.8-3.8   c0-2.1,1.7-3.8,3.8-3.8c2.1,0,3.8,1.7,3.8,3.8C19.8,18.2,18.1,19.9,16,19.9z"/> <path d="M20.8,4h-9.5C7.2,4,4,7.2,4,11.2v9.5c0,4,3.2,7.2,7.2,7.2h9.5c4,0,7.2-3.2,7.2-7.2v-9.5C28,7.2,24.8,4,20.8,4z M25.7,20.8   c0,2.7-2.2,5-5,5h-9.5c-2.7,0-5-2.2-5-5v-9.5c0-2.7,2.2-5,5-5h9.5c2.7,0,5,2.2,5,5V20.8z"/></g></svg> Instagram</h3>
                    <p> Wiwitdyy </p>
                </div>
            </div>

            <div class="kotak">
                <div class="text">
                    <h3> <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M4 20q-.825 0-1.412-.587Q2 18.825 2 18V6q0-.825.588-1.412Q3.175 4 4 4h16q.825 0 1.413.588Q22 5.175 22 6v12q0 .825-.587 1.413Q20.825 20 20 20Zm8-7L4 8v10h16V8Zm0-2 8-5H4ZM4 8V6v12Z"/></svg> Email </h3>
                    <p> wiwitwd16101@gmail.com </p>
                </div>
            </div>
        </div>

        <div class="contactform">
            <Form action="proses.php" method="post">
                <h2> Send Message </h2>
                <div class="textbox">
                    <span> Email </span>
                    <div class="inputbox">
                        <input type="text" name="email" required="required">
                    </div>
                </div>
                <div class="textbox">
                    <span> Name </span>
                    <div class="inputbox">
                        <input type="text" name="nama" required="required">
                    </div>
                </div>
                <div class="textbox">
                    <span> Send Message </span>
                    <div class="inputbox">
                        <input type="text" name="textboxs" required="required">
                    </div>
                </div>
                <button>
                    Send
                </button>    
                <div class="daftar"> 
                <br>
                </div> 
            </Form>
        </div>
    


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="script.js"></script>
</body>
</html>
