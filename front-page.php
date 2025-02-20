<?php get_header(); ?>

<main id="main" class="site-main">

    <section class="banner-top d-flex align-items-center">
        <div class="container text-center">
            <h1>I'm <strong>Luiz Reimann</strong></h1>
            <h2 id="h2-title" class="mb-3" aria-label="Web Developer"></h2>
            <a href="#contact" class="button">Contact me</a>
        </div>
    </section>



    <section class="about-me" id="about">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 mt-3 mt-md-0 text-center text-md-start">
                    <h2>About me</h2>
                    <p>
                        Sed vel congue eros. Integer tempus mi tellus, ac ornare orci lobortis eu. Sed porta interdum eros et commodo. Phasellus velit felis, iaculis fermentum enim eu, vestibulum sodales ligula. Duis elementum ullamcorper pretium. In a fringilla nibh, vitae elementum orci.
                    </p>
                    <p>
                        Quisque gravida lacinia arcu. In fermentum, nulla ac ultrices varius, tellus felis luctus elit, pellentesque pulvinar felis tortor nec diam.
                    </p>
                    </p>
                </div>
                <div class="col-md-6 order-first order-md-last text-center text-md-end pp-column">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-picture.jpg" alt="Luiz Reimann's Profile Picture" class="img-profile-picture">
                </div>
            </div>
        </div>
    </section>



    <section class="technology py-5" id="skills">
        <div class="container">
            <h2 class="text-center mb-3">Techonology</h2>

            <div class="row align-items-center">

                <div class="col-md-4">
                    <h3 class="text-center text-md-start mb-3">Education and Certifications</h3>
                    <div class="education-topic mb-2">
                        <h4 class="text-center text-md-start"><strong>Bachelor Information Systems</strong> 2020-2023</h4>
                        <p>Relevant coursework: Systems development, web applications, DevOps, DBA.</p>
                    </div>
                    <div class="education-topic">
                        <h4 class="text-center text-md-start"><strong>AWS Cloud Practitioner</strong> 2023-2026</h4>
                        <p>Experience in cloud-first development, with successful cases in EC2 and ECS applications.</p>
                    </div>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-6 my-skills">
                    <h3 class="text-center text-md-start">My Skills</h3>
                    <div class="skill mb-3">
                        <p>PHP and Laravel</p>
                        <span aria-label="100%" class="progress-bar" id="php-progress">
                            <div class="progress-fill"></div>
                        </span>
                    </div>
                    <div class="skill mb-3">
                        <p>Sass and Bootstrap</p>
                        <span aria-label="90%" class="progress-bar" id="sass-progress">
                            <div class="progress-fill"></div>
                        </span>
                    </div>
                    <div class="skill mb-3">
                        <p>JavaScript and Vue.js</p>
                        <span aria-label="75%" class="progress-bar" id="js-progress">
                            <div class="progress-fill"></div>
                        </span>
                    </div>
                    <div class="skill mb-3">
                        <p>WordPress</p>
                        <span aria-label="100%" class="progress-bar" id="wp-progress">
                            <div class="progress-fill"></div>
                        </span>
                    </div>
                </div>
                
            </div>
        </div>
    </section>



    <section class="portfolio py-5" id="portfolio">
        <div class="container">
            <h2 class="text-center mb-3">My Latest Projects</h2>

            <div class="projects">
                <div class="projects-slider">
                    <div class="project">
                        <div class="project-content">
                            <h3>Projeto Um</h3>
                            <a href="#" aria-label="View project"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="project">
                        <div class="project-content">
                            <h3>Projeto Dois</h3>
                            <a href="#" aria-label="View project"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="project">
                        <div class="project-content">
                            <h3>Projeto Três</h3>
                            <a href="#" aria-label="View project"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="project">
                        <div class="project-content">
                            <h3>Projeto Quatro</h3>
                            <a href="#" aria-label="View project"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="project">
                        <div class="project-content">
                            <h3>Projeto Cinco</h3>
                            <a href="#" aria-label="View project"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="wordpress py-5" id="wordpress">
        <div class="container">
            <h2 class="text-center mb-3">WordPress</h2>

            <div class="wp-projects">
                <div class="wp-slider">
                    <div class="wp-project">
                        <div class="wp-project-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wp-project-1.jpg" alt="Project 1" class="mb-3 img-fluid">
                            <h3>Project 1</h3>
                            <p>Sed vel congue eros. Integer tempus mi tellus, ac ornare orci lobortis eu. Sed porta interdum eros et commodo.</p>
                            <a href="#">See more</a>
                        </div>
                    </div>
                    <div class="wp-project">
                        <div class="wp-project-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wp-project-1.jpg" alt="Project 1" class="mb-3 img-fluid">
                            <h3>Project 2</h3>
                            <p>Sed vel congue eros. Integer tempus mi tellus, ac ornare orci lobortis eu. Sed porta interdum eros et commodo.</p>
                            <a href="#">See more</a>
                        </div>
                    </div>
                    <div class="wp-project">
                        <div class="wp-project-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wp-project-1.jpg" alt="Project 1" class="mb-3 img-fluid">
                            <h3>Project 3</h3>
                            <p>Sed vel congue eros. Integer tempus mi tellus, ac ornare orci lobortis eu. Sed porta interdum eros et commodo.</p>
                            <a href="#">See more</a>
                        </div>
                    </div>
                    <div class="wp-project">
                        <div class="wp-project-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wp-project-1.jpg" alt="Project 1" class="mb-3 img-fluid">
                            <h3>Project 4</h3>
                            <p>Sed vel congue eros. Integer tempus mi tellus, ac ornare orci lobortis eu. Sed porta interdum eros et commodo.</p>
                            <a href="#">See more</a>
                        </div>
                    </div>
                    <div class="wp-project">
                        <div class="wp-project-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wp-project-1.jpg" alt="Project 1" class="mb-3 img-fluid">
                            <h3>Project 5</h3>
                            <p>Sed vel congue eros. Integer tempus mi tellus, ac ornare orci lobortis eu. Sed porta interdum eros et commodo.</p>
                            <a href="#">See more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact py-5" id="contact">
        <div class="container">
            <h2 class="text-center mb-3">Contact me</h2>

            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 mt-3 mt-md-0">
                    <form action="">
                        <div class="mb-5">
                            <input type="text" name="name" id="name" placeholder="Name" required>
                        </div>
                        <div class="mb-5">
                            <input type="email" name="email" id="email" placeholder="E-mail" required>
                        </div>
                        <div class="mb-5">
                            <textarea name="message" id="messsage" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="mb-3 text-end">
                            <input type="submit" value="Send">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="social p-5 text-center text-md-start">
                        <a href="mailto:luizreimann@gmail.com"><p class="email">luizreimann@gmail.com</p></a>
                        <a href="https://github.com/luizreimann/" rel="nofollow"><p class="github">/luizreimann</p></a>
                        <a href="https://www.linkedin.com/in/luiz-reimann-146153195/" rel="nofollow"><p class="linkedin">Luiz Reimann</p></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>