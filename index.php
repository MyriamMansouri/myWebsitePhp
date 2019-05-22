<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Myriam Mansouri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/public/assets/styles/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Marvel:700" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.2/p5.js"></script>
</head>

<body>
    <section id="welcome-section">
        <header>
            <nav id="navbar">
                <ul>
                    <li>
                        <a href="#projects-section">Projects</a>
                    </li>
                    <li>
                        <a href="#about-section">About</a>
                    </li>
                    <li>
                        <a href="#contact-section">Contact</a>
                    </li>
                    <!-- <li>
                        <button id="color-theme-btn">
                        </button>
                    </li> -->
                </ul>
            </nav>
        </header>

        <div id="hero-quote">
            <div id="me">Myriam Mansouri</div><br>
            <div id="job">Fullstack web developer</div>
        </div>
    </section>

    <section id="projects-section">
        <h1>Projects</h1>
        <div id="projects-grid">
            <div class="tile">
                <a id="profile-link" href="https://www.alimentsporat.com/">
                    <div class="tile-bg" style="background: linear-gradient(rgba(255,255,255,0.1), rgba(0,0,0,0.7)), url('./public/assets/images/porat.jpg') center no-repeat;background-size: cover;">
                        <div class="layer">
                        </div>
                        <div class="project-text-wrapper">
                            <section class="project-text">
                                <h2>Les Aliments Porat</h2>
                                <p class="small">I designed and implemented a brand new website for delicious Quebec-based vegan
                                    company
                                    Aliments Porat.</p>
                            </section>
                            <section class="project-tags">
                                <span>Html</span>
                                <span>Css</span>
                                <span>Javascript</span>
                                <span>Google Maps API</span>
                            </section>
                        </div>
                        <div class="project-key-word">01</div>
                    </div>
                </a>
            </div>
            <div class="tile">
                <a id="profile-link" href="http://favgifs.herokuapp.com/?term=cat">
                    <div class="tile-bg" style="background: linear-gradient(rgba(255,255,255,0.1), rgba(0,0,0,0.7)), url('./public/assets/images/favgif.jpg') center no-repeat;background-size: cover;">
                        <div class="layer">
                        </div>
                        <div class="project-text-wrapper">
                            <section class="project-text">
                                <h2>Collect your Fav Gifs</h2>
                                <p class="small">Dig giphy and save your favorite gifs to your user account</p>
                            </section>
                            <section class="project-tags">
                                <span>Node.js</span>
                                <span>Mongodb</span>
                                <span>Sass</span>
                                <span>Handlebars</span>
                            </section>
                        </div>
                        <div class="project-key-word">02</div>
                    </div>
                </a>
            </div>
            <div class="tile">
                <a id="profile-link" href="https://internettaughtme.herokuapp.com/">
                    <div class="tile-bg" style="background: linear-gradient(rgba(255,255,255,0.1), rgba(0,0,0,0.7)), url('./public/assets/images/quote.jpg') center no-repeat;background-size: cover;">
                        <div class="layer">
                        </div>
                        <div class="project-text-wrapper">
                            <section class="project-text">
                                <h2>Internet knows best</h2>
                                <p class="small">Every 10 sec a new piece of advice from your best friend, the Internet.</p>
                            </section>
                            <section class="project-tags">
                                <span>Node.js</span>
                                <span>API fetching</span>
                                <span>Sass</span>
                                <span>Handlebars</span>
                            </section>
                        </div>
                        <div class="project-key-word">03</div>
                    </div>
                </a>
            </div>
            <div class="tile">
                <a id="profile-link" href="https://www.skillztank.com/home">
                    <div class="tile-bg" style="background: linear-gradient(rgba(255,255,255,0.1), rgba(0,0,0,0.7)), url('./public/assets/images/skillz.jpg') center no-repeat;background-size: cover;">
                        <div class="layer">
                        </div>
                        <div class="project-text-wrapper">
                            <section class="project-text">
                                <h2>Skillztank</h2>
                                <p class="small">UX, UI and styling in Angular for Skillztank, an online learning platform for businesses </p>
                            </section>
                            <section class="project-tags">
                                <span>Angular</span>
                                <span>UX</span>
                                <span>UI</span>
                                <span>Material Design</span>
                            </section>
                        </div>
                        <div class="project-key-word">04</div>
                    </div>
                </a>
            </div>

        </div>
        </div>
    </section>
    <section id="about-section">
        <h1>About me</h1>
        <article class="I-am">
            <h2>I'm Myriam, fullstack developer</h2>
            <!-- <img src="./public/assets/images/moi.png"> -->
            <p>
                My passions are creating, experimenting with new ways of doing things and always learning. Check my <u><a href="#project-section">Portfolio</a></u></p>
            <p> After spending some years in data analytics, mostly SAS and SQL stuff, I decided to jump into web development.
                Partly because I wanted more coding in my life, partly because open source librairies are so cool and partly because I love every step of web development, from UI design to backend implementation.</p>
            <p>I am also really into improv and vegetable gardening 🎭🌱 </p>
            <p>Have a project you'd like to discuss? <u><a href="#contact-section">Let's chat</a></u>
        </article>
        <article class="I-do">
            <h2>What I do</h2>
            <h3>Front-end</h3>
            <p class="small">Sass, Handlebars, Javascript</p>
            <h3>Back-end</h3>
            <p class="small">NodeJS, ExpressJS, APIs, MongoDB</p>
            <h3>Version control and web hosting</h3>
            <p class="small">Git, Heroku, C-panel</p>
            <h3>Design</h3>
            <p class="small">Adobe XD</p>
            <p>
            </p>
        </article>

    </section>
    <section id="contact-section">
        <div>
            <h1>Contact</h1>

            <p>Let's stay in touch. I'd like to hear about your ideas.
                I am currently available for web projects as well as full-time positions.</p>

            <section id="contact-form">
                <h2>Send me a message</h2>
                <form action="contactForm.php" method="post">
                    <label name="name"></label>
                    <input type="text" name="name" id="name" minlength="3" placeholder="Your name" required>

                    <label name="email"></label>
                    <input type="email" name="email" id="email" placeholder="Your email adress" required>

                    <label name="message"></label>
                    <textarea name="message" id="message" minlength="3" maxlength="10000" placeholder="Tell me about your project" class="expanding" required></textarea>
                    <button class="cta-btn"><input type="submit" name="submit" value="Send"></button>
                </form>


            </section>
        </div>
    </section>
    <div id="social-media">
        <ul>
            <li><a href="https://github.com/MyriamMansouri/" target="_blank"><i class="fab fa-github-alt"></i></a></li>
            <li><a href="https://ca.linkedin.com/in/myriammansouri" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://codepen.io/myriammansouri/" target="_blank"><i class="fab fa-codepen"></i></a></li>
        </ul>
    </div>
    <footer>&copy; Made with ❤️ and 🌮 by me</footer>
</body>

</html>