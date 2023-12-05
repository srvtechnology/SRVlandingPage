<?php

if (isset($_POST['inquiry'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $purpose = $_POST['purpose'];
    $message = $_POST['message'];


    require __DIR__ . '/vendor/autoload.php';

    $client = new \Google_Client();
    $client->setApplicationName('Google Sheets with Primo');
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
    $client->setAuthConfig(__DIR__ . '/credentials.json');

    $service = new Google_Service_Sheets($client);
    $spreadsheetId = "16LRNU5mC1x41r6BvMphOO04ibYYxHrt6q-sCqHAIES4";

    $range = "Leads-SRV-Landing"; // Sheet name

    $values = [
        [$name, $email, $phone, $purpose, $message],
    ];
    //echo "<pre>";print_r($values);echo "</pre>";exit;
    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);
    $params = [
        'valueInputOption' => 'RAW'
    ];

    $result = $service->spreadsheets_values->append(
        $spreadsheetId,
        $range,
        $body,
        $params
    );

    if ($result->updates->updatedRows == 1) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Thanks for Enquire
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Fail Please Try Again
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRV Technology</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
    <!-- owl carousel css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- owl carousel theme.css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/testimonial.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/media1200px.css">
    <link rel="stylesheet" href="./assets/css/media768px.css">
    <link rel="stylesheet" href="./assets/css/media400px.css">

</head>

<body>

    <!-- Navbar -->
    <div id="header" class="header">
        <div class="wrapper">
            <div class="header_wrp">
                <a href="#started" class="logo_img">
                    <img src="./assets/images/logo.png" height="60">
                </a>
                <div class="header_nav">
                    <a href="#get-started" class="active">Get Started</a>
                    <a href="#services">Services</a>
                    <a href="#about">About</a>
                    <a href="#challanges">Challanges</a>
                    <a href="#enquire">Enquire</a>
                    <a href="#faqs">FAQs</a>
                </div>
                <span class="toggle_btn">
                    <div class="single_bar"></div>
                    <div class="single_bar"></div>
                </span>
            </div>
        </div>
    </div>
    <!-- END Navbar -->

    <!-- Banner -->
    <section id="get-started" class="b1">
        <div class="started">
            <div class="wrapper">
                <div class="started_row">
                    <div class="started_left me-3">
                        <h1>Where innovation meets excellence</h1>
                        <p>One stop solution for IT consultation and development. Let’s connect and make your business digitally grow & simplified with SRV Technology.</p>
                        <a href="https://calendly.com/srvtechnlogy/" target="_blank">
                            <button type="button" class="btn_primary" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/srvtechnlogy/30min'});return false;">Book a 30 minutes free consultation call</button>
                        </a>
                    </div>
                    <div class="started_right">
                        <div class="image">
                            <!-- <img src="https://storage.googleapis.com/join-public-pages-static-assets/2023/01/539a086d-home-top-en-en.png"> -->
                            <img src="./assets/images/tech.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Trusted -->
    <div class="wrapper">
        <div class="trusted">
            <p>Trusted by 50+ organisations world wide</p>
            <div class="swiper mySwiper1">
                <div class="trusted_slides swiper-wrapper">
                    <div class="slide_box swiper-slide slide_card_gray">
                        <img src="https://srvtechnology.com/public/frontend/assets/images/trust/almara.png">
                    </div>
                    <div class="slide_box swiper-slide slide_card_gray">
                        <img src="https://srvtechnology.com/public/frontend/assets/images/trust/logo.png">
                    </div>
                    <div class="slide_box swiper-slide slide_card_gray">
                        <img src="https://srvtechnology.com/public/frontend/assets/images/trust/reward.png">
                    </div>
                    <div class="slide_box swiper-slide slide_card_gray">
                        <img src="https://srvtechnology.com/public/frontend/assets/images/trust/success.png">
                    </div>
                    <div class="slide_box swiper-slide slide_card_gray">
                        <img src="https://srvtechnology.com/public/frontend/assets/images/trust/tgcs.png">
                    </div>
                    <div class="slide_box swiper-slide slide_card_gray">
                        <img src="https://srvtechnology.com/public/frontend/assets/images/trust/bhutan.png">
                    </div>
                    <div class="slide_box swiper-slide slide_card_gray">
                        <img src="https://srvtechnology.com/public/frontend/assets/images/trust/am2x-logo.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Trusted -->

    <!-- Cards -->
    <section class="wrapper" id="services">
        <div class="cards">
            <div class="card" data-tilt>
                <div class="card_body">
                    <img src="https://storage.googleapis.com/join-public-pages-static-assets/2021/03/4c2a223a-o-build-icon.svg">
                    <h3>Website Development</h3>
                    <p>Web Designing Company and Best Web Development in Kolkata & Siliguri Providing website Design Services to Startup, Small Business, Industries as well as Corporate Clients.</p>
                    <p>This is an art form to shape your dreams into an official design or website that will serve as a bridge between your business objectives and target audience. It expresses your thoughts, true morals & ethical values that revolves around your entire business.</p>
                </div>
            </div>
            <div class="card" data-tilt>
                <div class="card_body">
                    <img src="https://storage.googleapis.com/join-public-pages-static-assets/2021/04/6e56161f-o-promote-icon.svg">
                    <h3>Mobile App Development</h3>
                    <p>We offer high-quality mobile app development services that include right from design to development till it reaches the market. Our team of mobile developers offers robust, high-quality, and scalable mobile apps within the scheduled timeline.</p>
                    <p>We develop mobile apps on both native and hybrid platform including Flutter. This gives us advantage to build more compatible and competitive apps around the world.</p>
                </div>
            </div>
            <div class="card" data-tilt>
                <div class="card_body">
                    <img src="https://storage.googleapis.com/join-public-pages-static-assets/2021/04/b0f62a37-o-manage-icon.svg">
                    <h3>Software-CRM Development</h3>
                    <p>Popular CRMs we work and delivering development solutions on</p>
                    <p>Salesforce</p>
                    <p>Bitrix24</p>
                    <p>Hubspot</p>
                    <p>Quickbooks</p>
                    <p>Custom CRM solutions</p>
                </div>
            </div>
        </div>
    </section>
    <!--  End Cards -->
    <section class="wrapper" id="challanges">
        <div class="user_friendly">
            <div class="overlay"></div>
            <div class="thirty_minutes" id="challanges">
                <h3>Free 30 mins software solution challenge</h3>
                <a href="https://calendly.com/srvtechnlogy/" target="_blank">
                    <button type="button" class="btn_primary" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/srvtechnlogy/30min'});return false;">Book a 30 minutes free consultation call</button>
                </a>
                <ol class="gradient-list">
                    <li><span>Struggling to find the right software development company?</span> With so many options available, it can be extremely difficult to make the right choice for your project. </li>
                    <li>Revolutionize your enterprise's digital transformation journey with our software development company.
                        With a track record of over 9 years, we understand the unique demands of your business, such as data security, integration, or maintenance issues. Our team possesses expertise in <span>.NET, C#, Java, Azure, and AWS Cloud </span> to drive remarkable outcomes for your project.
                    </li>
                    <li>As many companies and solutions move onto the web and develop their software, the number of potential threats is rising.<span>GIVE US JUST 30 MINS AND WE WILL HANDLE YOUR CONCERN.</span> </li>
                    <li><span>Got ripped off by scammer software companies?</span>Avail this <span> FREE 30 MINS MEETING </span> and get to know how you will get immediate & good software solutions without getting ripped off.</li>
                    <li> <span>LIMITED SEATS & LIMITED TIME OFFER! </span> Offer expires by 30/11/2023, HURRY UP & AVAIL THIS VALUE DRIVEN SESSION NOW!</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- User Friendly -->

    <style>
        .user_section {
            padding: 4rem 0 4rem 0;
        }
    </style>
    <div class="wrapper user_section">
        <div class="user_friendly">
            <div class="overlay"></div>
            <div class="friendly_content">
                <h3>User-friendly Web development that delivers immediate results</h3>
                <p>Attract more customers for your business and make a digital impact</p>
            </div>
            <!-- <img src="https://storage.googleapis.com/join-public-pages-static-assets/2022/01/d5f88025-home-paralax-bg-1536x1455.png" class="main_img"> -->
            <div class="images">
                <img src="./assets/images/web.png" class="main_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/icon-Xing.svg" class="img-fluid img1 absolute_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/icon-LinkedIn.svg" class="img-fluid img2 absolute_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/icon-Google.svg" class="img-fluid img3 absolute_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/icon-i.svg" class="img-fluid img4 absolute_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/stepstone.webp" class="img-fluid img5 absolute_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/icon-Facebook.svg" class="img-fluid img6 absolute_img">
            </div>
            <div class="friendly_footer friendly_content">
                <p>Ready to build a top notch digital brand/presence?</p>
                <a href="https://calendly.com/srvtechnlogy/" target="_blank">
                    <button type="button" class="btn_primary " onclick="Calendly.initPopupWidget({url: 'https://calendly.com/srvtechnlogy/30min'});return false;">Book a 30 minutes free consultation call</button>
                </a>
            </div>
        </div>
    </div>
    <div class="wrapper user_section">
        <div class="user_friendly">
            <div class="overlay"></div>
            <div class="friendly_content">
                <h3>User-friendly Mobile app development that delivers immediate results</h3>
                <p>Attract more customers for your business and make a digital impact</p>
            </div>
            <!-- <img src="https://storage.googleapis.com/join-public-pages-static-assets/2022/01/d5f88025-home-paralax-bg-1536x1455.png" class="main_img"> -->
            <div class="images">
                <img src="./assets/images/mobile.png" class="main_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/icon-Xing.svg" class="img-fluid img1 absolute_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/icon-LinkedIn.svg" class="img-fluid img2 absolute_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/icon-Google.svg" class="img-fluid img3 absolute_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/icon-i.svg" class="img-fluid img4 absolute_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/stepstone.webp" class="img-fluid img5 absolute_img">
                <img src="https://join.com/app/themes/join-main-theme/static/img/home/icon-Facebook.svg" class="img-fluid img6 absolute_img">
            </div>
            <div class="friendly_footer friendly_content">
                <p>Ready to build a top notch digital brand/presence?</p>
                <a href="https://calendly.com/srvtechnlogy/" target="_blank">
                    <button type="button" class="btn_primary " onclick="Calendly.initPopupWidget({url: 'https://calendly.com/srvtechnlogy/30min'});return false;">Book a 30 minutes free consultation call</button>
                </a>
            </div>
        </div>
    </div>
    <!-- End User Friendly -->

    <!-- Perfect Person -->
    <section class="wrapper p-0" id="about">
        <div class="perfect_person">
            <div class="content">
                <h3>About the company</h3>
            </div>
            <div class="perfect_page">
                <div class="perfect_item">
                    <span class="number_span">1</span>
                    <div class="page_row">
                        <div class="page_column d-flex justify-content-center">
                            <div class="col_img">
                                <img src="./assets/images/success.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="page_column">
                            <div class="page_content ml_84">
                                <div class="content_top">
                                    <h3>Our key Point to success</h3>
                                </div>
                                <div class="content_body">
                                    <p> <i class="fa-solid fa-arrow-right me-2"></i>Idea</p>
                                    <p> <i class="fa-solid fa-arrow-right me-2"></i>Plan</p>
                                    <p> <i class="fa-solid fa-arrow-right me-2"></i>Consistency</p>
                                    <p> <i class="fa-solid fa-arrow-right me-2"></i>Teamwork</p>
                                    <p> <i class="fa-solid fa-arrow-right me-2"></i>Process</p>
                                    <p> <i class="fa-solid fa-arrow-right me-2"></i>Perform competently each day</p>
                                    <p> <i class="fa-solid fa-arrow-right me-2"></i>Result</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="highlighted_line"></div>
                </div>
                <div class="perfect_item">
                    <span class="number_span">2</span>
                    <div class="page_row" style="flex-direction: row-reverse;">
                        <div class="page_column  ml_84  d-flex justify-content-center">
                            <div class="col_img">
                                <img src="./assets/images/vision.jpg" alt="" class="img-fluid">
                                <!-- <img src="https://storage.googleapis.com/join-public-pages-static-assets/2022/03/2e2e5a4e-home_image-2.png" alt="" class="img-fluid"> -->
                            </div>
                        </div>
                        <div class="page_column">
                            <div class="page_content mx-3 mx-lg-0">
                                <div class="content_top">
                                    <h3>Our Vision</h3>
                                    <p>We provide the solutions to grow your business.</p>
                                </div>
                                <div class="content_body">
                                    <p>We at SRV Technology always try & help to enhance business growth of our customers with user friendly UI/UX, creative design, development and to deliver market defining high quality solutions that create value for the company and reliable competitive advantage to customers around the globe.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="highlighted_line"></div>
                </div>
                <div class="perfect_item">
                    <span class="number_span">3</span>
                    <div class="page_row">
                        <div class="page_column d-flex justify-content-center">
                            <div class="col_img">
                                <img src="./assets/images/mission.jpg" alt="" class="img-fluid">
                                <!-- <img src="https://storage.googleapis.com/join-public-pages-static-assets/2022/02/cc23d0d4-plat-per-ex_chart_2201_wt_glo_de-xxx.png" alt="" class="img-fluid"> -->
                            </div>
                        </div>
                        <div class="page_column">
                            <div class="page_content ml_84">
                                <div class="content_top">
                                    <h3>Our Mission</h3>
                                    <p>We provide the solutions to grow your business.</p>
                                </div>
                                <div class="content_body">
                                    <p>Our mission is to build a quality and comprehensive technology infrastructure, establish and maintain an effective operational environment, and deliver quality, prompt, cost effective and reliable technology services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="highlighted_line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Perfect Person -->

    <!-- Find Your Candidate -->
    <div class="wrapper">
        <div class="perfect_candidate">
            <div class="overlay_lightblue"></div>
            <div class="candidate_row">
                <div class="candidate_column">
                    <div class="content">
                        <!-- <div class="logo">CSR.</div> -->
                        <h3>Find perfect digital solution for your business</h3>
                        <a href="https://calendly.com/srvtechnlogy/" target="_blank">
                            <button type="button" class="btn_primary" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/srvtechnlogy/30min'});return false;">Book a 30 minutes free consultation call</button>
                        </a>
                        <div class="content_footer">
                            <div class="item">
                                <i class="fa-solid fa-check"></i>
                                <p>Book a free call</p>
                            </div>
                            <div class="item">
                                <i class="fa-solid fa-check"></i>
                                <p>Get a solution</p>
                            </div>
                            <div class="item">
                                <i class="fa-solid fa-check"></i>
                                <p>Start the development</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="candidate_column">
                    <div class="cadidate_img">
                        <img src="./assets/images/bg1.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Find Your Candidate -->

    <!-- FAQ -->
    <section class="wrapper" id="faqs">
        <div class="faq">
            <div class="overlay"></div>
            <div class="content">
                <h3>Questions about our free recruiting software? ​​​​​​​
                    We have answers!</h3>
                <div class="tabs">
                    <!-- <div class="tab_head">
                        <div class="tab_btn active">General</div>
                        <div class="tab_btn">Build</div>
                        <div class="tab_btn">Promote</div>
                        <div class="tab_btn">Manage</div>
                    </div> -->
                    <div class="tab_body">
                        <div class="tab_item">
                            <div class="faq_list">
                                <div class="faq_item">
                                    <button type="button" class="faq_item_question" onclick="handleQuestion(event);">From whom we will get the solution in 30 minutes?</button>
                                    <div class="faq_item_answer content">
                                        <p>Industry experienced developers working in the development field for more than 8 years.</p>
                                    </div>
                                </div>
                                <div class="faq_item">
                                    <button type="button" class="faq_item_question" onclick="handleQuestion(event);">Do we need to take service or pay anything for this call or after this call?</button>
                                    <div class="faq_item_answer content">
                                        <p>No, It's absolutely free and designed to give free consultation to the non-tech users.</p>
                                    </div>
                                </div>
                                <div class="faq_item">
                                    <button type="button" class="faq_item_question" onclick="handleQuestion(event);">Can we connect for our website or mobile development requirements for free for 30 minutes call?</button>
                                    <div class="faq_item_answer content">
                                        <p>Yes, you are welcome. We are here to help you. Let's schedule a free meeting.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ -->
    <style>

    </style>
    <div class="wrapper">
        <div class="trusted">
            <h3 class="text-center">Technologies we work on</h3>
            <div class="swiper mySwiper2">
                <div class="trusted_slides swiper-wrapper">
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/Kotlin_Icon.png" alt="">
                        <h4>Kotlin</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/swift.png" alt="">
                        <h4>Swift</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/magento.png" alt="">
                        <h4>Magento</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/salesforce-logo.png" alt="">
                        <h4>Salesforce</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/microsoft.png" alt="">
                        <h4>Microsoft</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div class="text-center"> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/aws.png" alt="">
                        <h4>AWS</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/wordpress.png" alt="">
                        <h4>Wordpress</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/Squarespace.png" alt="">
                        <h4>Squarespace</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/Shopify.png" alt="">
                        <h4>Shopify</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/blockchain.png" alt="">
                        <h4>Blockchain</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/python.png" alt="">
                        <h4>Python</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/dj.png" alt="">
                        <h4>Django</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/php.png" alt="">
                        <h4>PHP</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/laravel.png" alt="">
                        <h4>Laravel</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/node.png" alt="">
                        <h4>Node Js</h4>
                        <!-- </div> -->
                    </div>
                    <div class="slide_box swiper-slide slide_card">
                        <!-- <div> -->
                        <img src="https://srvtechnology.com/public/frontend/assets/images/work-tech/angular.png" alt="">
                        <h4>Angular</h4>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="wrapper">
        <div class="testimonial">
            <div class="overlay"></div>
            <div class="gtco-testimonials">
                <h2 class="text-center">Testimonials</h2>
                <p>Activate one page navigation on any pagethroughout your with the selection onesimple option in the admin area. Doing this you can create anything homepages.</p>
                <div class="owl-carousel owl-carousel1 owl-theme">
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
                            <div class="card-body">
                                <h5>Upwork <br />
                                    <span> Client </span>
                                </h5>
                                <p class="card-text">“ SRV owns the requirement and ensures that work is completed as per expectation. Will continue working with them. ” </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301" alt="">
                            <div class="card-body">
                                <h5>IT Manager , SR<br />
                                    <span> Client </span>
                                </h5>
                                <p class="card-text">Great team and excellent communication. Will definitely work with them in the future.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
                            <div class="card-body">
                                <h5>Upwork<br />
                                    <span> Client </span>
                                </h5>
                                <p class="card-text">“ Great team and excellent communication. Will definitely work with them in the future. React + Node project ” </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
                            <div class="card-body">
                                <h5>Rohan, Upwork<br />
                                    <span> Client </span>
                                </h5>
                                <p class="card-text">“ Vikrant &amp; his team approach toward our project was well structured. The way he found out solution to our issue is commendable. The problem was multilevel and at each he prove his proficiency. This makes it clear that he has expertise and his claim of full stack developer is justified. Moreover what I was expecting from the development team is transparency and Vikrant did not let me down! AWS Service + Android App (Kotlin) ” </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Form -->
    <section class="wrapper" id="enquire">
        <div class="google_form">
            <div class="overlay"></div>
            <form action="#" method="post">
                <div class="content">
                    <h3>Enquire Now</h3>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="fw-bold">Name</label>
                                        <input type="text" name="name" class="form-control google_form_input" placeholder="Enter name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="fw-bold">Email</label>
                                        <input type="email" name="email" class="form-control google_form_input" placeholder="Enter email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="fw-bold">Phone Number</label>
                                        <input type="text" name="phone" class="form-control google_form_input" placeholder="Enter Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="fw-bold">Purpose</label>
                                        <select class="form-control google_form_input" name="purpose">
                                            <option value="Website development">Website development</option>
                                            <option value="Mobile app development">Mobile app development</option>
                                            <option value="Software development">Software development</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Book keeping">Book keeping</option>
                                            <option value="Free consultation for 20 minutes">Free consultation for 20 minutes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="name" class="mb-2 fw-bold">Message</label>
                                        <textarea class="form-control google_form_input" rows="5" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn_primary" name="inquiry" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Google Form -->

    <!-- Footer -->
    <div class="wrapper">
        <div class="footer">
            <div class="overlay"></div>
            <div class="content">
                <div class="footer_content">
                    <div class="logo">
                        <a href="" class="logo_img">
                            <img src="./assets/images/logo.png" style="width: 150px; height: 150px;">
                        </a>
                    </div>
                    <p>Maximize your reach and hiring success by posting your job ad to 10+ job search sites within one tool and with one single login - for free.</p>
                    <a href="https://calendly.com/srvtechnlogy/" target="_blank">
                        <button type="button" class="btn_primary" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/srvtechnlogy/30min'});return false;">Book a 30 minutes free consultation call</button>
                    </a>
                </div>
                <div class="footer_links">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-3">
                            <div class="link_list">
                                <h4 class="link_heading">Quick Links</h4>
                                <a href="#get-started" class="link">Get Started</a>
                                <a href="#services" class="link">Services</a>
                                <a href="#about" class="link">About</a>
                                <a href="#challanges" class="link">Challanges</a>
                                <a href="#enquire" class="link">Enquire</a>
                                <a href="#faqs" class="link">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-3">
                            <div class="link_list">
                                <h4 class="link_heading">Get in Touch</h4>
                                <a href="#" class="link">
                                    <i class="fa-solid fa-location-dot text-dark me-2"></i>
                                    <span>Siliguri, West Bengal</span>
                                </a>
                                <a href="#" class="link">
                                    <i class="fa-regular fa-envelope text-dark me-2"></i>
                                    <span>srvtechnology0@gmail.com</span>
                                </a>

                                <div class="footer_socail">
                                    <a href="https://api.whatsapp.com/send?phone=7001769472" class="circle" target="_blank">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/srv01technology/" class="circle" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://telegram.me/vikrantsingh7" class="circle" target="_blank">
                                        <i class="fa-brands fa-telegram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="copyright">Copyright © 2022 SRV TECHNOLOGY. All right reserved</span>
        </div>
    </div>
    <!-- End Footer -->

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://md-aqil.github.io/images/swiper.min.js"></script>
    <!-- owl carousel js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./assets/js/gsap.min.js"></script>
    <script src="./assets/js/scroll-trigger.min.js"></script>
    <script src="./assets/js/vanilla-tilt.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
</body>

</html>