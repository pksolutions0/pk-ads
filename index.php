<?php


if (isset($_POST['name']) && $_POST['name'] != ""  && isset($_POST['mail']) && $_POST['mail'] != "" && isset($_POST['tel']) && $_POST['tel'] != "") {



    $name = $_POST['name'];
    $email = $_POST['mail'];
    $number = $_POST['tel'];
    $text = $_POST['text'];



    $to = "frankrobertson897@gmail.com";
    $subject = "Virtual Assistant Website Query";
    $Message = $name . "Has sent a new message -- " . $text . " and his contact details is " . $number . "<br> and " . $email;
    $header = "From " . $name;

    if (mail($to, $subject, $Message, $header)) {

        $successMessage = "Mail sent successfully !! We will connect you shortly .";
        header('Location:index.php?successMessage=' . $successMessage);
    }
}

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/favicon.png" type="image/png">


    <title>Virtual Assistant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/page.css">






    <style>
        .button-2 {
            cursor: pointer;
        }

        .error {
            font-size: 16px;
            font-weight: 500;
            color: red;
            text-align: left;
            margin-top: 3px;
        }
    </style>
</head>

<body>
    <!-- full section header -->
    <header class="header">

        <!-- for svg  -->
        <!-- <div class="svg-header">

        </div> -->


        <navbar class="navbar">

            <div class="logo-img">
                <h6>Virtual Assistant</h6>
            </div>

            <div class="menu">
                <a href="tel:844-850-0990">Schedule Call</a>
            </div>

        </navbar>

        <div class="header-container">

            <div class="header-content ">

                <p>Most trusted Digital Partner for your </p>
                <span data-aos="fade-in">Website Development</span>
                <p>
                    <span> <b> Get your website designed and managed at just $5 per hour</b> </span>With our top-notch experts, you can be sure that your site will be managed perfectly. Our team of experts will help you make your site professional, responsive and optimized for conversions. We provide the best service at the cheapest price.
                </p>

                <button class="button-1"> <a href="tel:844-850-0990" target="_blank">Contact Us</a> </button>

            </div>

            <div class="header-form  min-n">

                <form action="" onsubmit="return Validateform();" id="form" name="form" method="post">

                    <p>Get Free Quote Now</p>
                    <input type="text" placeholder="Name" id="name" name="name">
                    <div class="error" id="name-r"></div>
                    <input type="number" placeholder="Mobile" id="tel" name="tel">
                    <div class="error" id="tel-r"></div>
                    <input type="email" placeholder="Email" id="mail" name="mail">
                    <div class="error" id="mail-r"></div>
                    <textarea placeholder="Query" rows="4" name="text"></textarea>
                    <input type="submit" value="Submit" class="button-2">

                </form>

            </div>

            <div class="link">

                <ul>
                    <li><a href="#" target="_blank">Instagram</a></li>
                    <li><a href="#" target="_blank">Email</a></li>
                    <li>
                        <a href="#" target="_blank">Facebook</a>
                    </li>
                    </li>

                </ul>

            </div>

        </div>

    </header>


    <main>
        <!-- please add scroll and make responsive for mobile view -->
        <div class="adds">

            <img src="images/google-partner.png" alt="">
            <img src="images/clutch.png" alt="">
            <img src="images/google-star.png" alt="">
            <img src="images/woo-commerce.png" alt="">
            <img src="images/wordpress.png" alt="">
            <!-- <img src="images/g-woo.jpg" alt=""> -->

            <!-- extra for scroll  -->

        </div>

        <!-- this class use multiple time in this code  -->
        <div class="collab">

            <div class="collab-left" data-aos="fade-in">
                <p>COLLABRATION WITH US</p>
                <p>Why Choose Us?</p>
                <p>Prepare to benefit from our expertise in building fantastic eCommerce websites at just <b>$5/hr</b>. At Virtual Assistant, we actively believe in creating robust eCommerce websites that are not only search engine friendly but also increase conversion rate and immediately boost your online sales by 50x.

                </p>

                <div class=" collab-left-exp ">

                    <div class="collab-left-exp-0 ">
                        <img src="images/project-delivered.png ">

                        <div class="collab-left-exp-0-content ">
                            <p data-aos="fade-up"><b>1000+</b></p>
                            <p>PROJECT DELIVERED</p>

                        </div>

                    </div>

                    <div class="collab-left-exp-0 ">
                        <img src="images/happy-client_11zon.jpg ">

                        <div class="collab-left-exp-0-content ">
                            <p data-aos="fade-up"><b>950+</b></p>
                            <p>HAPPY CLIENT</p>

                        </div>

                    </div>

                    <div class="collab-left-exp-0 ">
                        <img src="images/awwards.png ">

                        <div class="collab-left-exp-0-content ">
                            <p data-aos="fade-up"><b>5+</b></p>
                            <p>AWARD RECEIVED</p>
                        </div>

                    </div>

                    <div class="collab-left-exp-0 ">
                        <img src="images/industries-served.png ">

                        <div class="collab-left-exp-0-content ">
                            <p data-aos="fade-up"><b>20+</b></p>
                            <p>INDUSTRIED SERVED</p>

                        </div>

                    </div>

                </div>

                <!-- <button Class="button-001 button-2 ">Get Quoted</button> -->
            </div>

            <!-- photo removed in mobile viewport  -->

            <div class="collab-right " data-aos="fade-in">
                <img src="images/pexels-rodnae-productions-7581110.jpg ">

            </div>
        </div>

        <div class="core-content ">
            <img src="images/title-icon.png " data-aos="fade-up">
            <p>SOLUTIONS WE PROVIDE</p>
            <p>Our Core Services</p>
            <div class="main-core ">
                <div class="core-services-grid ">
                    <div class="web-mobi-divi" data-aos="fade-in">
                        <img src="images/icon04.png " data-aos="fade-up">
                        <h6>Web Design</h6>
                        <p><span>By combining strategy, user experience, and design, you may create an online presence by learning about and comprehending your business.</span></p>
                    </div>
                    <div class="web-mobi-divi " data-aos="fade-in">
                        <img src="images/mobile-development.png " data-aos="fade-up">
                        <h6>Ecommerce Web Development</h6>
                        <p>
                            <span>Our goal is to support you as you scale your website over time. That's why we collaborate with you to continually enhance the functionality of your website.</span>
                        </p>
                    </div>
                    <div class="web-mobi-divi " data-aos="fade-in">
                        <img src="images/digital-marketing.png " data-aos="fade-up">
                        <h6>WordPress Development</h6>
                        <p><span>WordPress Development by Expert WP Professionals. Available WP Support and full development. WP Layout, WP Plugins, WP Theme WP SEO.</span></p>
                    </div>
                    <div class="web-mobi-divi " data-aos="fade-in">
                        <img src="images\icons8-web-64.png " data-aos="fade-up">
                        <h6>Dynamic Web Development</h6>
                        <p><span>Professional dynamic web development services.Using tech stalks like SQL,Express, MongoDB, PHP etc.</span></p>
                    </div>
                    <div class="web-mobi-divi " data-aos="fade-in">
                        <img src="images\icons8-app-development-64.png" data-aos="fade-up">
                        <h6>Business Websites</h6>
                        <p><span>Our skilled development team can turn your ideal website into a functional commercial website. </span></p>
                    </div>
                    <div class="web-mobi-divi " data-aos="fade-in">
                        <img src="images/icons8-software-developer-64.png " data-aos="fade-up">
                        <h6>Personal Website</h6>
                        <p><span>We work with you and our professionals to create a personal or portfolio website. We continuously assist your development.</span></p>
                    </div>
                </div>

            </div>

        </div>


        <div class="collab ">
            <div class="collab-left copy " data-aos="fade-in">
                <p>INTERACTIVE SUPPORT</p>
                <p>eCommerce Website Support</p>
                <p>Our goal is to support you as you scale your website over time and provide all your needs at just <b>$5/hr</b>. We collaborate with you to continuously enhance the functionality of your website and stay abreast of technical needs as a result.</p>
                <div class="collab-left-icon ">
                    <img src="images/iconset02.png ">
                </div>
                <a href="tel:844-850-0990" target="_blank"> <button Class="button-002 button-2 ">Contact Us</button></a>

            </div>

            <!-- photo removed in mobile view -->

            <div class="collab-right-01 " data-aos="fade-in">
                <img src="images/support-web.jfif">
            </div>
        </div>
        <div class="review-div core-content " data-aos="fade-in">
            <img src="images/title-icon.png " data-aos="fade-up">
            <p>HONEST REVIEWS</p>
            <p>Amazing Virtual Assistant Customers and Users Testimonials</p>
            <div class="review-grid ">


                <div class="review-item ">
                    <div class="review-user-details ">
                        <img class="user-img " src="images/testimonials-4.jpg ">
                        <div class="user-details ">
                            <p>Patrick</p>
                            <!-- <p>February 25, 2020.</p> -->
                        </div>

                    </div>


                    <div class="review-ratting ">

                    </div>

                    <div class="user-review ">

                        <p>Our new website has made us very delighted! It appears expert and is really simple to use. We have had excellent experiences with Virtual Assistant's customer care. They manage things effectively and are readily available to answer any queries we may have. They also provide us with monthly reports so we can monitor the performance of our website. I'd advise anyone looking for website design or SEO work to use Virtual Assistant!</p>
                    </div>
                </div>

                <div class="review-item ">
                    <div class="review-user-details ">
                        <img class="user-img " src="images/testimonials-5.jpg ">
                        <div class="user-details ">
                            <p>Brain</p>
                            <!-- <p>June 10, 2020.</p> -->
                        </div>

                    </div>


                    <div class="review-ratting ">

                    </div>

                    <div class="user-review ">

                        <p>Our website is amazing! The navigation is simple. WordPress support has been outstanding; if I don't understand something or am unable to complete a task, Virtual Assistant is highly attentive and will guide me in the right direction. Web design firm Virtual Assistant is incredibly talented. We are a medium-sized nonprofit and are currently receiving visitors from all over the world, therefore we are astounded by the source of the traffic to our website.</p>
                    </div>
                </div>

                <div class="review-item ">
                    <div class="review-user-details ">
                        <img class="user-img " src="images/download-03.jpg ">
                        <div class="user-details ">
                            <p>Lara</p>
                            <!-- <p>May 15, 2020.</p> -->
                        </div>

                    </div>


                    <div class="review-ratting ">

                    </div>

                    <div class="user-review ">

                        <p>I love working with Virtual Assistant, and I utilise them for much more than just creating websites. It nearly seems like they are a worker. It's safe to say that Virtual Assistant is a reliable organisation. They take care of my PHP development work, website design, hosting, and SEO.

                            <br>
                            Getting service just at $5/hr is really amazing I am amazed how it can be so cheap.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="footer ">
        <div class="footer-svg "></div>
        <div class="footer-grid ">
            <div class="footer-grid-0 ">
                <div class="logo-img-footer ">
                    <div class="logo-img">
                        <h6>Virtual Assistant</h6>
                    </div>
                </div>
                <p> Virtual Assistant is most trusted website development and digital marketing agency. Your complete business solutions at one place and provide all solutions at just $5/hr.We provide services for all of your web development issues and problems at best price and with best quality.</p>


            </div>
            <div class="footer-grid-0 ">
                <p><b>EXPLORE</b></p>
                <ul>
                    <li><a href="#" target="_blank">Home</a></li>
                    <li><a href="# " target="_blank">About Us</a></li>
                    <li><a href="#" target="_blank">Portfolio</a></li>
                    <li><a href="#" target="_blank">Faq</a></li>
                    <li><a href="#" target="_blank">Career</a></li>
                    <li>
                        <a href="tel:844-850-0990">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="footer-grid-0 ">
                <p><b>FOLLOW</b></p>
                <ul>
                    <li>
                        <div class="social-link ">
                            <i class="fab fa-instagram "></i>
                            <a href="#" target="_blank"> instagram</a>
                        </div>
                    </li>
                    <li>
                        <div class="social-link ">
                            <i class="fab fa-facebook "></i>
                            <a href="#" target="_blank"> facebook</a>
                        </div>
                    </li>
                    <li>
                        <div class="social-link ">
                            <i class="fas fa-envelope "></i>
                            <a href="#" target="_blank"> email</a>
                        </div>
                    </li>
                    <li>
                        <div class="social-link ">
                            <i class="fab fa-linkedin-in "></i>
                            <a href="# " target="_blank"> linkdin</a>
                        </div>
                    </li>
                    <li>
                        <div class="social-link ">
                            <i class="fab fa-twitter "></i>
                            <a href="# " target="_blank"> twitter</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer-grid-0 ">
                <p><b>Contact Us</b></p>
                <div class="address ">

                    <div class="contact ">Call Us: <a href="tel:844-850-0990" target="_blank">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js "></script>
    <script>
        AOS.init({
            duration: 1000,
        });
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57CRVDL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script src="./assests/js/index.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Tawk To -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6373483db0d6371309cf136b/1ght54cj7';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>