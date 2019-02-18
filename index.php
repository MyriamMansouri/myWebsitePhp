<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Myriam Mansouri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/public/assets/styles/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Marvel:700" rel="stylesheet">
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
                        <a href="#contact-section">Contact</a>
                    </li>
                    <li>
                        <button id="color-theme-btn">
                        </button>
                    </li>
                </ul>
            </nav>
        </header>

        <div id="hero-quote">
            <h1 id="me">Myriam Mansouri</h1><br>
            <h2 id="job">Front-end web developer</h2>
        </div>
    </section>

    <section id="projects-section">
        <div id="projects-grid">
            <div class="project-tile">
                <a id="profile-link" href="https://alimentsporat.herokuapp.com/">
                    <article class="project" style="background: linear-gradient(rgba(255,255,255,0.1), rgba(0,0,0,0.7)), url('./public/assets/images/porat.jpg') center no-repeat;background-size: cover;">
                        <div class="layer">
                        </div>
                        <div class="project-text-wrapper">
                            <section class="project-text">
                                <h2>Les Aliments Porat</h2>
                                <p>I designed and implemented a brand new website for delicious Quebec-based vegan
                                    company
                                    Aliments Porat.</p>
                            </section>
                            <section class="project-tags">
                                <span>html</span>
                                <span>css</span>
                                <span>javascript</span>
                                <span>Google Maps API</span>
                            </section>
                        </div>
                        <div class="project-key-word">01</div>
                    </article>
                </a>
            </div>
            <div class="project-tile">
                <a id="profile-link" href="https://codepen.io/myriammansouri/full/JeMWmM">
                    <article class="project" style="background: linear-gradient(rgba(255,255,255,0.1), rgba(0,0,0,0.7)), url('./public/assets/images/nina.jpg') center no-repeat;background-size: cover;">
                        <div class="layer">
                        </div>
                        <div class="project-text-wrapper">
                            <section class="project-text">
                                <h2>Tribute page for Nina Simone</h2>
                                <p>A one page tribute to wonderful singer Nina Simone.</p>
                            </section>
                            <section class="project-tags">
                                <span>html</span>
                                <span>css</span>
                                <span>javascript</span>
                            </section>
                        </div>
                        <div class="project-key-word">02</div>
                    </article>
                </a>
            </div>
        </div>
        </div>
    </section>
    <section id="contact-section">
        <article>
            <h1>Contact</h1>
            <section id="contact-intro">
                <p>Let's stay in touch. I'd like to hear about your ideas.
                I am currently available for web projects and job hiring.</p>
            </section>
            <section id="contact-form">
                <h2>Send me a message</h2>
                <form action="contactForm.php" method="post">
                    <label name="name"></label>
                    <input type="text" name="name" id="name" minlength="3" placeholder="Your name" required>

                    <label name="email"></label>
                    <input type="email" name="email" id="email" placeholder="Your email adress" required>

                    <label name="message"></label>
                    <textarea name="message" id="message" minlength="3" maxlength="10000" placeholder="Tell me about your project" class="expanding"
                        required></textarea>
                    <button class="cta-btn"><input type="submit" name="submit" value="Send" ></button>
                </form> 


            </section>
        </article>
    </section>
    <div id="social-media">
        <ul>
            <li><a href="https://github.com/MyriamMansouri/" target="_blank"><i class="fab fa-github-alt"></i></a></li>
            <li><a href="https://ca.linkedin.com/in/myriammansouri" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://codepen.io/myriammansouri/" target="_blank"><i class="fab fa-codepen"></i></a></li>
        </ul>
    </div>
    <footer>&copy; Made with <i class="fas fa-heart"></i> by me</footer>
</body>

</html>