<?php
$insert = false;
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    
    $to = "abdullahakmal238@gmail.com";
    $subject = $name. " wants to connect";
    $txt = $message. " ". $number;
    $headers = "From: '.$email.'" . "\r\n";

    mail($to,$subject,$txt,$headers);



}?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Abdullah Akmal</title>
        <link rel="icon" type="image/x-icon" href="./images/favicon-16x16.png">

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">

    </head>


    <body>

        <!-- custom cursors  -->
        <div class="cursor-1"></div>
        <div class="cursor-2"></div>


        <div id="menu-bars" class="fas fa-bars"></div>

        <!-- header section starts  -->

        <header>

            <a href="#" class="logo"> <span>Abdullah</span> <br>Akmal </a>

            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <!-- <a href="#service">service</a> -->
                <a href="#experience">Education</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#contact">Contact</a>
            </nav>

            <div class="follow">
                <a href="https://api.whatsapp.com/send/?phone=+923224768248&text&type=phone_number&app_absent=0" class="fab fa-whatsapp"></a>
                <a href="https://www.facebook.com/abdullah.akmal.733" class="fab fa-facebook-f"></a>
                <a href="https://www.instagram.com/abdullahakmalkhan7" class="fab fa-instagram"></a>
                <a href="https://twitter.com/Abdullah4768248?t=ETFjpGVffQCf0CeBWe2Kvg&s=08" class="fab fa-twitter"></a>
                <a href="https://www.linkedin.com/in/abdullah-akmal-a2585a238/" class="fab fa-linkedin"></a>

            </div>

        </header>

        <!-- header section ends -->

        <!-- home section starts  -->

        <section class="home" id="home">

            <div class="content">
                <span class="hi"> Hi there... </span>
                <h3> I am <span> Abdullah Akmal</span> </h3>
                <p class="info"> I am a Web developer </p>
                <p class="text"> I am Also a student of BSIT From Punjab University. I develop web by using(HTML, Css, Javascript,PHP, & WORDPRESS) I want to Learn more and grow my Skills to work with profesionals</p>
                <a href="#about" class="btn">About me</a>
            </div>

            <div class="image">
                <img src="images/img.png" alt="">
            </div>

        </section>

        <!-- home section ends -->

        <!-- about section starts  -->

        <section class="about" id="about">

            <h1 class="heading"> About <span> Me </span> </h1>

            <div class="row-1">

                <div class="image">
                    <img src="images/img2.png" alt="">
                </div>

                <div class="content">
                    <h3> My name is Abdullah Akmal & I am a Web developer </h3>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi error molestias impedit officia! Exercitationem dignissimos esse eos quas nisi impedit delectus, voluptate ullam iste nostrum at. Dolor culpa eaque omnis.</p> -->
                    <div class="box-container">
                        <div class="box">
                            <p> <span> Age : </span> 21 </p>
                            <p> <span> Gender : </span> male </p>
                            <p> <span> Language : </span> English , Urdu </p>
                            <p> <span> Work : </span> Web developer </p>
                        </div>
                        <div class="box">
                            <p> <span> Freelance : </span> Available </p>
                            <p> <span> Phone : </span> 03224768248 </p>
                            <p> <span> Email : </span> abdullahakmal238@gmail.com </p>
                            <p> <span> Country : </span> Pakistan </p>
                        </div>
                    </div>
                    <a href="./Abdullah Cv.pdf" class="btn">Download CV</a>
                    <!-- <a href="#" class="btn">hire me</a> -->
                </div>

            </div>

            <h1 class="heading"> <span> My </span> Skills </h1>

            <div class="row-2">

                <div class="skills">
                    <div class="progress">
                        <h3> HTML5 <span> 90% </span> </h3>
                        <div class="bar"> <span></span> </div>
                    </div>
                    <div class="progress">
                        <h3> CSS3 <span> 90% </span> </h3>
                        <div class="bar"> <span></span> </div>
                    </div>
                    <div class="progress">
                        <h3>Javascript <span> 65% </span> </h3>
                        <div class="bar"> <span></span> </div>
                    </div>
                    <div class="progress">
                        <h3>PHP <span> 60% </span> </h3>
                        <div class="bar"> <span></span> </div>
                    </div>
                    <div class="progress">
                        <h3> Bootstrap <span> 80% </span> </h3>
                        <div class="bar"> <span></span> </div>
                    </div>
                    <div class="progress">
                        <h3> Wordpress <span> 90% </span> </h3>
                        <div class="bar"> <span></span> </div>
                    </div>


                </div>


                <!-- <div class="box-container">

                <div class="box">
                    <h3> >> 2+ </h3>
                    <p>years of experience</p>
                </div>
                <div class="box">
                    <h3> >> 250+ </h3>
                    <p>happy clients</p>
                </div>
                <div class="box">
                    <h3> >> 150+ </h3>
                    <p>projects completed</p>
                </div>
                <div class="box">
                    <h3> >> 12+ </h3>
                    <p>awards won</p>
                </div>

            </div>  -->

            </div>

        </section>

        <!-- about section ends -->

        <!-- service section starts  -->

        <!-- <section class="service" id="service">

        <h1 class="heading"> <span> my </span> services </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-code"></i>
                <h3>web design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
            </div>

            <div class="box">
                <i class="fas fa-paint-brush"></i>
                <h3>graphic design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
            </div>

            <div class="box">
                <i class="fas fa-mobile"></i>
                <h3>responsive design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
            </div>

            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>seo marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
            </div>

            <div class="box">
                <i class="fas fa-chart-line"></i>
                <h3>digital marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
            </div>

        </div>

    </section> -->

        <!-- service section ends -->

        <!-- experience section starts  -->

        <section class="experience" id="experience">

            <h1 class="heading"> <span> My </span> Education </h1>

            <div class="box-container">

                <div class="box">
                    <div class="content">
                        <span> 2018 </span>
                        <h3>Matric</h3>
                        <p>Matric with Computer Science From THE EDUCATOR FM CAMPUS </p>
                    </div>
                </div>

                <div class="box">
                    <div class="content">
                        <span> 2020 </span>
                        <h3>Inter / ICS</h3>
                        <p>ICS from Aspire College Thokar Niaz Baig Campus Lahore </p>
                    </div>
                </div>

                <div class="box">
                    <div class="content">
                        <span> 2021 </span>
                        <h3>BSIT</h3>
                        <p>BSIT Continue from Punjab University </p>
                    </div>
                </div>

                <div class="box">
                    <div class="content">
                        <span> 2021 </span>
                        <h3>Computer Operator (TAVTA)</h3>
                        <p>This is deploma of Computer Operator From TEVTA in which I learned Complete Microsoft Office.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="content">
                        <span> 2022 </span>
                        <h3>Web development ( NAVTAC/ IAC)</h3>
                        <p>This is 6 month deploma of web design from Insituate of Art and Culture Lahore</p>
                    </div>
                </div>

                <!-- <div class="box">
                <div class="content">
                    <span> 2020 - 2021 </span>
                    <h3>front-end development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
                </div>
            </div> -->

            </div>

        </section>

        <!-- experience section ends -->

        <!-- portfolio section starts  -->

        <section class="portfolio" id="portfolio">

            <h1 class="heading"> <span> My </span> Portfolio </h1>

            <div class="box-container">

                <div class="box">
                    <img src="./images/1.png" alt="">
                    <h3> project 01 </h3>
                    <div class="icons">
                        <a href="#" class="fas fa-link"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-search"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="images/2.png" alt="">
                    <h3> project 02 </h3>
                    <div class="icons">
                        <a href="#" class="fas fa-link"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-search"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="images/3.png" alt="">
                    <h3> project 03 </h3>
                    <div class="icons">
                        <a href="#" class="fas fa-link"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-search"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="images/4.png" alt="">
                    <h3> project 04 </h3>
                    <div class="icons">
                        <a href="#" class="fas fa-link"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-search"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="images/5.png" alt="">
                    <h3> project 05 </h3>
                    <div class="icons">
                        <a href="#" class="fas fa-link"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-search"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="images/6.png" alt="">
                    <h3> project 06 </h3>
                    <div class="icons">
                        <a href="#" class="fas fa-link"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-search"></a>
                    </div>
                </div>

            </div>

        </section>

        <!-- portfolio section ends -->

        <!-- contact section starts  -->

        <section class="contact" id="contact">

            <h1 class="heading"> contact <span> me </span> </h1>

            <div class="icons-container">

                <div class="icons">
                    <i class="fas fa-envelope"></i>
                    <h3>My Email</h3>
                    <p>abdullahakmal238@gmail.com</p>

                </div>

                <div class="icons">
                    <i class="fas fa-phone"></i>
                    <h3>My Number</h3>
                    <p>0322-4768248</p>
                    <p>0315-4768248</p>
                </div>

                <div class="icons">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>My Address</h3>
                    <p>Sher Shah Colony Raiwind Road lahore Pakistan</p>
                </div>

            </div>

            <div class="row">

                <form action="" method="post">

                    <input type="text" name="name" placeholder="name" class="box">
                    <input type="email" name="email" placeholder="email" class="box">
                    <input type="number" name="number" placeholder="number" class="box">

                    <textarea name="message" placeholder="message" id="" cols="30" rows="10"></textarea>

                    <input type="submit" name="send" class="btn" value="Send Message">

                </form>

                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.025679536641!2d74.21843431444036!3d31.413418559560007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa6b2bbe2144f2f0f!2zMzHCsDI0JzQ4LjMiTiA3NMKwMTMnMTQuMiJF!5e0!3m2!1sen!2s!4v1659335998117!5m2!1sen!2s
                " width="600 " height="450 " style="border:0; " allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade " allowfullscreen=" " loading="lazy "></iframe>

            </div>


        </section>

        <!-- contact section ends -->

        <!-- footer section  -->
        <footer class="footer ">&copy; created by <span> Abdullah Akmal</span> | all rights reserved! </footer>




















        <!-- Pixel Code for https://www.widgetsquad.com/ -->
        <script async src="https://www.widgetsquad.com/pixel/6ufivwsqyui0bgn3ri9ai24k4nrj56ab"></script>
        <!-- END Pixel Code -->

        <!-- custom js file link  -->
        <script src="js/script.js "></script>

    </body>

    </html>