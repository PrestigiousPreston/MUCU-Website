<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/public/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css -->
    <link rel="stylesheet" href="/public/css/style.css">
    <!-- page title -->
    <title>About Maseno University Christian Union</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/public/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/public/css/about.css">
    <!-- Font Awesome -->
    <!-- <script src="https://kit.fontawesome.com/ae877f7da9.js" crossorigin="anonymous"></script> -->
</head>

<body>
    <!-- spinner -->

    <!-- SVG icons -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
        <symbol id="chevron-left" viewBox="0 0 16 16">
            <title>chevron-left</title>
            <g fill="#212121">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0">
                </path>
            </g>
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <title>chevron-right</title>
            <g fill="#212121">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708">
                </path>
            </g>
        </symbol>
        <symbol id="arrow-bar-right" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5" />
        </symbol>
    </svg>

    <!-- toggle theme -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <!-- Major ongoing/upcoming events display -->
    <div class="container-xxl h-100 d-none">
        <div class="row h-100">
            <div class="col-12 h-100">
                <div class="bg-info h-100 d-flex text-center justify-content-center align-items-center">
                    <!-- Upcoming/Ongoing Events Countdown -->
                    <div class="d-flex align-items-center">
                        <p class="m-2 lead fw-bold">Commission Conference 2024:</p>
                        <div class="events-cd" data-countdown="2024/12/27"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include"../components/header.php"; ?> 

    <!-- header -->
    <section id="header">
        <div class="container-xl">
            <h2>
                <div class="display-4 text-center">Discover Our Story
                </div>
            </h2>
            <p class="lead text-muted text-center">
                Welcome to Maseno University Christian Union. Learn about our history, vision, and values.
            </p>
        </div>
    </section>

    <!-- History -->
    <section id="OurStory">
        <div class="container-xl">
            <div class="row">
                <div class="col col-auto col-md-6">
                    <h2 class="display-6">A Journey of Faith: The History and Growth of Maseno University Christian
                        Union
                    </h2>
                </div>
                <div class="col col-auto col-md-6">
                    <p class="text-muted">Maseno University Christian Union, established in 1978 as an affiliate of
                        Moi
                        University, has experienced remarkable growth over the years. From its humble beginnings,
                        the
                        Union
                        has grown in population, with a large number of converts joining every year. As a community
                        of
                        committed young men and women, the Christian Union provides discipleship care to new
                        converts
                        and
                        fosters stability in Christian faith among its members.</p>
                </div>
                <div class="col-12">
                    <img class="img-fluid" src="/public/assets/images/Placeholder Lightbox.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Goals -->
    <section id="goals">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-6 order-md-1">
                    <h2>
                        <div class="display-6">Commited to <span class="text-body-secondary">Discipleship,
                                Evangelism</span>
                            and <span class="text-body-secondary">Fostering a Strong Christian Community</span>
                        </div>
                    </h2>
                    <p class="text-muted">At Maseno University Christian Union, we are dedicated to nurturing
                        disciples,
                        spreading the Gospel, and building a vibrant Christian community.</p>
                    <ul>
                        <li>Discipleship is at the core of our mission, guiding believers in their spiritual growth.
                        </li>
                        <li>We actively engage in evangelism to share the love of Christ.</li>
                        <li>We foster a strong Christian community through fellowship and support.</li>
                    </ul>
                </div>
                <div class="col-md-5 text-center order-md-1">
                    <img class="img-fluid" src="/public/assets/images/700x500.png" alt=" ">
                </div>
            </div>
        </div>
    </section>

    <!-- Doctrinal Basis -->
    <section id="doctrine">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col-lg-6 order-md-2">
                    <h2 class="display-6">Our Core Beliefs and Doctrinal Stances</h2>
                    <p class="text-muted">At Maseno University Christian Union, we are guided by a set of core
                        beliefs
                        and
                        doctrinal stances that define who we are and how we live our lives. These beliefs form the
                        foundation of our faith and guide our actions and interactions with others.</p>
                    <h4 class="text-warning">Belief in God</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        varius
                        enim
                        in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla,
                        ut
                        commodo diam libero vitae erat.</p>
                    <hr class="featurette-divider">
                    <h4 class="text-primary">Salvation Through Jesus</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        varius
                        enim
                        in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla,
                        ut
                        commodo diam libero vitae erat.</p>
                    <hr class="featurette-divider">
                    <h4 class="text-success">The Bible as Truth</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        varius
                        enim
                        in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla,
                        ut
                        commodo diam libero vitae erat.</p>
                    <hr class="featurette-divider">
                </div>
                <div class="col-md-6 d-none d-lg-inline">
                    <img class="img-fluid" src="/public/assets/images/Placeholder Image.png" alt=" ">
                </div>
            </div>
        </div>
    </section>

    <!-- Membership -->
    <section id="membership">
        <div class="container-xl">
            <div class="row mb-4">
                <div class="col col-auto col-md-6">
                    <h2 class="display-6">How to Become a Member and Responsibilities
                    </h2>
                </div>
                <div class="col col-auto col-md-6">
                    <p class="text-muted">At Maseno University Christian Union, we offer different membership
                        options to
                        cater to the diverse needs of our community. Whether you're looking for full membership or
                        associate
                        membership, we have a place for you. As a member, you have certain rights and
                        responsibilities
                        that
                        contribute to the growth and stability of our Christian faith.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-auto col-md-6 col-lg-3">
                    <h5>Full Member</h5>
                    <p class="text-muted">Full membership provides access to all the benefits and privileges of
                        being a
                        member of Maseno University Christian Union.</p>
                </div>
                <div class="col-auto col-md-6 col-lg-3">
                    <h5>Associates</h5>
                    <p class="text-muted">Associate membership is available for individuals who want to be part of
                        our
                        community without full commitment.</p>
                </div>
                <div class="col-auto col-md-6 col-lg-3">
                    <h5>Renewal of Membership</h5>
                    <p class="text-muted">To renew your membership, simply follow the renewal process outlined on
                        our
                        website.</p>
                </div>
                <div class="col-auto col-md-6 col-lg-3">
                    <h5>Cessation of Membership</h5>
                    <p class="text-muted">If you wish to cease your membership, please contact our membership
                        department
                        for
                        assistance.</p>
                </div>
            </div>
    </section>

    <!-- Milestones -->
    <section id="milestones">
        <div class="container-xl">

        </div>
    </section>

    <!-- Leadership -->
    <section>
        <div class="container-xl">
            <div class="text-center">
                <h2>
                    <div class="display-4">Meet Our Team</div>
                </h2>
                <p class="lead text-muted mb-16">Get to know the dedicated leaders of our Christian Union.</p>
            </div>
            <!-- i-frame -->
            <iframe src="/app/components/leadership.htm" title="Events"></iframe>
            <div class="row justify-content-center align-items-center">
                <a href="leadership.php" target="_parent" rel="noreferrer"
                    class="btn col-auto btn-success btn-sm mt-3">Meet
                    them all</a>
            </div>
        </div>

    </section>

    <!-- Ministries -->
    <section id="ministries">
        <div class="container-lg">
            <div class="text-center mb-5">
                <h2 class="display-5">An Overview of Our Ministries</h2>
                <p class="lead"></p>
            </div>
            <div class="swiper">
                <div class="slide-container d-flex justify-content-center align-items-center mb-5">
                    <div class="card-wrapper swiper-wrapper">
                        <!-- Ministry Card -->
                        <div class="card swiper-slide bg-body-secondary">
                            <div class="ministry-photo">
                                <img class="img-fluid" src="/public/assets/images/Medium Placeholder Image.png"
                                    alt="ministry">
                            </div>
                            <div class="ministry-details">
                                <img class="m-2" src="/public/assets/images/User.jpg" alt="logo">

                                <div class="name-description">
                                    <h4 class="name">Praise and Worship</h4>
                                    <p class="d-inline description text-muted text-wrap">Leads the congregation in
                                        heartfelt worship and vibrant praise through music.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ministry Card -->
                        <div class="card swiper-slide bg-body-secondary">
                            <div class="ministry-photo">
                                <img class="img-fluid" src="/public/assets/images/Medium Placeholder Image.png"
                                    alt="ministry">
                            </div>
                            <div class="ministry-details">
                                <img class="m-2" src="/public/assets/images/User.jpg" alt="logo">

                                <div class="name-description">
                                    <h4 class="name">Discipleship</h4>
                                    <p class="d-inline description text-muted text-wrap">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Tempore, nesciunt!</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ministry Card -->
                        <div class="card swiper-slide bg-body-secondary">
                            <div class="ministry-photo">
                                <img class="img-fluid" src="/public/assets/images/Medium Placeholder Image.png"
                                    alt="ministry">
                            </div>
                            <div class="ministry-details">
                                <img class="m-2" src="/public/assets/images/User.jpg" alt="logo">

                                <div class="name-description">
                                    <h4 class="name">Choir</h4>
                                    <p class="d-inline description text-muted text-wrap">The Choir ministry uses their
                                        voices to praise and worship God in harmony.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ministry Card -->
                        <div class="card swiper-slide bg-body-secondary">
                            <div class="ministry-photo">
                                <img class="img-fluid" src="/public/assets/images/Medium Placeholder Image.png"
                                    alt="ministry">
                            </div>
                            <div class="ministry-details">
                                <img class="m-2" src="/public/assets/images/User.jpg" alt="logo">

                                <div class="name-description">
                                    <h4 class="name">Instrumentalist</h4>
                                    <p class="d-inline description text-muted text-wrap">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Tempore, nesciunt!</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ministry Card -->
                        <div class="card swiper-slide bg-body-secondary">
                            <div class="ministry-photo">
                                <img class="img-fluid" src="/public/assets/images/Medium Placeholder Image.png"
                                    alt="ministry">
                            </div>
                            <div class="ministry-details">
                                <img class="m-2" src="/public/assets/images/User.jpg" alt="logo">

                                <div class="name-description">
                                    <h4 class="name">Media and IT</h4>
                                    <p class="d-inline description text-muted text-wrap">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Tempore, nesciunt!</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ministry Card -->
                        <div class="card swiper-slide bg-body-secondary">
                            <div class="ministry-photo">
                                <img class="img-fluid" src="/public/assets/images/Medium Placeholder Image.png"
                                    alt="ministry">
                            </div>
                            <div class="ministry-details">
                                <img class="m-2" src="/public/assets/images/User.jpg" alt="logo">

                                <div class="name-description">
                                    <h4 class="name">Creative</h4>
                                    <p class="d-inline description text-muted text-wrap">The Creative ministry expresses
                                        their love for God through various art forms.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ministry Card -->
                        <div class="card swiper-slide bg-body-secondary">
                            <div class="ministry-photo">
                                <img class="img-fluid" src="/public/assets/images/Medium Placeholder Image.png"
                                    alt="ministry">
                            </div>
                            <div class="ministry-details">
                                <img class="m-2" src="/public/assets/images/User.jpg" alt="logo">

                                <div class="name-description">
                                    <h4 class="name">Sunday School</h4>
                                    <p class="d-inline description text-muted text-wrap">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Tempore, nesciunt!</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ministry Card -->
                        <div class="card swiper-slide bg-body-secondary">
                            <div class="ministry-photo">
                                <img class="img-fluid" src="/public/assets/images/Medium Placeholder Image.png"
                                    alt="ministry">
                            </div>
                            <div class="ministry-details">
                                <img class="m-2" src="/public/assets/images/User.jpg" alt="logo">

                                <div class="name-description">
                                    <h4 class="name">Intercessory</h4>
                                    <p class="d-inline description text-muted text-wrap">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Tempore, nesciunt!</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ministry Card -->
                        <div class="card swiper-slide bg-body-secondary">
                            <div class="ministry-photo">
                                <img class="img-fluid" src="/public/assets/images/Medium Placeholder Image.png"
                                    alt="ministry">
                            </div>
                            <div class="ministry-details">
                                <img class="m-2" src="/public/assets/images/User.jpg" alt="logo">

                                <div class="name-description">
                                    <h4 class="name">Hospitality</h4>
                                    <p class="d-inline description text-muted text-wrap">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Tempore, nesciunt!</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ministry Card -->
                        <div class="card swiper-slide bg-body-secondary">
                            <div class="ministry-photo">
                                <img class="img-fluid" src="/public/assets/images/Medium Placeholder Image.png"
                                    alt="ministry">
                            </div>
                            <div class="ministry-details">
                                <img class="m-2" src="/public/assets/images/User.jpg" alt="logo">

                                <div class="name-description">
                                    <h4 class="name">High School</h4>
                                    <p class="d-inline description text-muted text-wrap">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Tempore, nesciunt!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navButton"></div>
                <div class="swiper-button-prev swiper-navButton"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- EVE Teams -->
    <section id="eve teams">
        <div class="container-xl d-flex align-items-center justify-content-center">
            <div class="swiper">    
                <div class="swiper-wrapper content">
                    <div class="swiper-slide eveteam bg-secondary position-relative border rounded-3">
                        <div class="eveteam-content d-flex flex-column align-items-center p-4">
                            <div class="evteam-logo">
                                <img class=""
                                    src="/public/assets/images/CET Logo.jpg" alt="evteam-logo">
                            </div>
                            <div class="media-icons">
                                <a class="p-1" href="https://www.facebook.com/MasenoCuCet/"
                                        target="_blank"><svg class="bi" width="20" height="20">
                                            <use xlink:href="/public/assets/icons/icons.svg#facebook"></use>
                                        </svg></a>
                                <a class="p-1"
                                        href="https://chat.whatsapp.com/channel/" target="_blank"><svg
                                            class="bi" width="20" height="20">
                                            <use xlink:href="/public/assets/icons/icons.svg#whatsapp"></use>
                                        </svg></a>
                                <!-- <i class="bi bi-facebook text-primary fs-4"></i> -->
                            </div>
                            <div class="name-description d-flex flex-column align-items-center">
                                <h4>Central Evangelistic Team</h4>
                                <h4>(C.E.T)</h4>
                                <p class="text-muted">Preaching the word.</p>
                            </div>
                            <div class="d-inline-block text-center text-md-start">
                                <a href="" target="" id="youtube"
                                class="btn btn-warning btn-md my-2 ms-1 rounded-pill">Learn More</a>
                                <a href="https://www.facebook.com/Masenocu/" target="_blank" id="facebook"
                                class="btn btn-outline-primary btn-md ms-1 border-1 rounded-pill d-none">Follow</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery">
        <div class="container-xl">
            <h2>
                <div class="display-5 text-center">Image Gallery
                </div>
            </h2>
            <p class="lead text-muted text-center">
                Capturing moments of impact and community engagement
            </p>
            <div>
                <img class="img-fluid" src="/public/assets/images/Content.png" alt="">
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials">
        <div class="container-xl">

        </div>
    </section>

    <!-- CTA -->
    <section id="cta">
        <div class="container-xl"></div>
    </section>

    <?php include"../components/footer.php"; ?>


    <!-- Swiper JS -->
    <script src="/public/js/swiper-bundle.min.js"></script>
    <script src="/public/js/about.js"></script>
    <!-- main js -->
    <script src="/public/js/main.js"></script>
    <!-- bootstrap JS -->
    <script src="/public/js/bootstrap.bundle.min.js"></script>

</body>

</html>