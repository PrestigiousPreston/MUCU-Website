<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../public/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css -->
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Maseno University Christian Union</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- unicons iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
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

    <!-- main header -->
    <header id="header" class="sticky-top bg-body">
        <!-- navbar -->
        <div class="container-xxl d-flex flex-wrap align-items-center justify-content-around justify-content-sm-center">
            <!-- navbar-brand -->
            <a href="index.php"
                class="nav col-lg-1 col-xl-auto navbar-brand d-flex flex-auto justify-content-center align-items-center mx-xl-auto mt-2 mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <svg width="40" height="32" xlmns="http://www.w3.org/2000/svg">
                    <rect width="100%" height="100%" fill="white" />
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="/public/assets/icons/icons.svg#mucu"></use>
                    </svg>
                </svg><span class="ms-1 ms-lg-0 ms-xl-1 me-1 fw-bold" style="font-size: large;">MUCU</span>
            </a>
            <!-- more nav -->
            <div class="d-sm-none flex-shrink-0 dropdown mx-auto">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    More
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="/app/views/leadership.php">Leadership</a></li>
                    <li><a class="dropdown-item" href="#">Noticeboard</a></li>
                    <li><a class="dropdown-item" href="#resources">Resources</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#contact">Reach out</a></li>
                </ul>
            </div>
            <!-- mobile nav -->
            <div class="dropdown d-sm-none ms-5">
                <a href=""
                    class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="bi me-2" width="24" height="24">
                        <use xlink:href="/public/assets/icons/icons.svg#menu" style="fill: currentColor; color:invert;">
                        </use>
                    </svg>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item active" href="/docs/index.php" aria-current="page">Home</a>
                    </li>
                    <li><a class="dropdown-item" href="/app/views/about.php">About Us</a></li>
                    <li><a class="dropdown-item" href="/app/views/fellowships.php">Fellowships</a></li>
                    <li><a class="dropdown-item" href="/app/views/ministries.php">Ministries</a></li>
                    <li><a class="dropdown-item" href="/app/views/evteams.php">Evangelistic Teams</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item icon-link disabled"
                            style="--bs-link-hover-color-rgb: 25, 135, 84;">Online Giving
                            <svg class="bi" width="64" height="64">
                                <use xlink:href="/public/assets/icons/icons.svg#give"
                                    style="fill: currentColor; color:invert;">
                                </use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- navbar links -->
            <nav class="p-0 mb-1 mt-xl-2 mx-xl-auto border rounded navbar-expand-sm bg-primary" data-bs-theme="auto">
                <div class="collapse navbar-collapse">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li class="nav-item"><a href="/docs/index.php"
                                class="nav-link px-2 link-body-emphasis active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="/app/views/about.php"
                                class="nav-link px-2 link-body-emphasis">About
                                Us</a>
                        </li>
                        <li class="nav-item"><a href="/app/views/fellowships.php"
                                class="nav-link px-2 link-body-emphasis">Fellowships</a></li>
                        <li class="nav-item"><a href="/app/views/ministries.php"
                                class="nav-link px-2 link-body-emphasis">Ministries</a></li>
                        <li class="nav-item"><a href="/app/views/evteams.php"
                                class="nav-link px-2 link-body-emphasis">Evangelistic Teams</a>
                        <li class="nav-item"><a href="/app/views/leadership.php"
                                class="nav-link px-2 link-body-emphasis">Leadership</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline dropdown text-end">
                            <a href="#" class="nav-link d-block link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu text-small">
                                <li>
                                    <a class="dropdown-item icon-link disabled"
                                        style="--bs-link-hover-color-rgb: 25, 135, 84;">Online Giving
                                        <svg class="bi" width="64" height="64">
                                            <use xlink:href="/public/assets/icons/icons.svg#give"
                                                style="fill: currentColor; color:invert;">
                                            </use>
                                        </svg>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#">Noticeboard</a></li>
                                <li><a class="dropdown-item" href="#resources">Resources</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#reachout">Reach Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- bs search -->
            <form class="col-10 col-lg-auto mx-lg-4 mx-xl-auto mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            <!-- cta section -->
            <div
                class="col-xl-auto mx-lg-4 mx-xl-auto d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center my-2">
                <div class="text-end">
                    <button type="button" class="btn btn-outline-primary mx-2">Login</button>
                    <button type="button" class="btn btn-warning ms-2">Sign-up</button>
                </div>
            </div>
        </div>
    </header>

    <!-- hero area -->
    <section id="hero" style="height: 544px;">
        <div class="container-xl">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                        class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                        class=""></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                        </svg>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>
                                    <div class="display-2">Join Our Community and Grow in Faith</div>
                                </h1>
                                <p class="lead text-muted">Become part of our Christian Union community and experience
                                    spiritual growth in a supportive environment.</p>
                                <p><a class="btn btn-md btn-warning" href="#register" id="joinus">Join Us</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                        </svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>
                                    <div class="display-2">Welcome to</div>
                                    <div class="mobile-s d-sm-none display-6 text-muted">Maseno University Christian
                                        Union!
                                    </div>
                                    <div class="content-to-hide-xs mobile-m d-md-none display-5 text-muted">Maseno
                                        University Christian Union!</div>
                                    <div class="d-none d-md-block display-2 text-muted">Maseno University Christian
                                        Union!
                                    </div>
                                </h1>
                                <p class="lead mt-2 mb-1 text-muted">We are a group of committed young men and women
                                    living
                                    for God and pursuing a holy life.</p>
                                <p class="lead mt-0 text-muted">Join us in our journey of faith.</p>
                                <p><a class="btn btn-md btn-outline-success border-2" href="/app/views/about.php"
                                        id="learnmore">Learn
                                        more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                        </svg>
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>
                                    <div class="display-2">Get Involved and Make a Difference</div>
                                </h1>
                                <p class="lead text-muted">Engage in our ministries and evangelistic teams to make a
                                    positive impact for Christ.</p>
                                <p><a class="btn btn-md btn-primary" href="#contact" id="contactus">Contact Us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- history & growth -->
    <section id="history">
        <div class="container-xl">
            <div class="row justify-content-center align-items-center">
                <h2>
                    <div class="d-none d-md-block d-lg-none display-4 text-center">A Legacy of Growth and Faith</div>
                </h2>
                <div class="col-md-6 text-center text-md-start">
                    <h2>
                        <div class="d-md-none d-lg-block display-4 text-center">A Legacy of Growth and Faith</div>
                    </h2>
                    <p class="my-2 text-muted">Since its inception in 1978, the Maseno University Christian Union has
                        experienced remarkable growth, becoming a vibrant community of believers dedicated to living for
                        God
                        and pursuing a holy life. With a rich history and a strong
                        foundation in discipleship, the Christian Union continues to impact lives and maintain stability
                        in
                        Christian faith.</p>
                    <a href="/app/views/about.php" class="btn btn-outline-success btn-md ms-auto mb-2 border-2">Learn
                        More</a>
                </div>
                <div class="col-md-6 text-center">
                    <img class="img-fluid" src="/public/assets/images/700x500.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- vision, mission, goals -->
    <section id="goals&objectives">
        <div class="container-xl">
            <div class="row justify-content-center align-items-center">
                <h2>
                    <div class="display-4 text-center">Living for God, Pursuing a Holy Life
                    </div>
                </h2>
                <p class="my-4 lead text-muted text-center">
                    At Maseno University Christian Union, our core values revolve around living for God and pursuing a
                    holy
                    life.
                </p>
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center align-items-center">
                    <div class="col justify-content-center">
                        <div class="text-center">
                            <svg class="bi text-body-secondary" width="64" height="64">
                                <use xlink:href="/public/assets/icons/icons.svg#eye"></use>
                            </svg>
                        </div>
                        <h2>
                            <div class="display-6 text-center">Our Vision</div>
                        </h2>
                        <p class="text-muted text-center">
                            Living as True Disciples of Jesus Christ.
                        </p>
                    </div>
                    <div class="col ">
                        <div class="text-center">
                            <svg class="bi text-body-secondary" width="64" height="64">
                                <use xlink:href="/public/assets/icons/icons.svg#rocket"></use>
                            </svg>
                        </div>
                        <h2>
                            <div class="display-6 text-center">Our Mission</div>
                        </h2>
                        <p class="text-muted text-center">
                            Nurturing belief in Christ & Developing Christ-like character.
                        </p>
                    </div>
                    <div class="col ">
                        <div class="text-center">
                            <svg class="bi text-body-secondary" width="64" height="64">
                                <use xlink:href="/public/assets/icons/icons.svg#bullseye"></use>
                            </svg>
                        </div>
                        <h2>
                            <div class="display-6 text-center">Our Goals</div>
                        </h2>
                        <p class="text-muted text-center">
                            Discipleship, Evangelism & Leadership Development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- benefits -->
    <section id="benefits">
        <div class="container-xl ">
            <div class="row justify-content-center align-items-center">
                <h2>
                    <div class="d-none d-md-block d-lg-none display-4 text text-center">Experience Spiritual Growth and
                        <span class="text-body-secondary">Community Support</span>
                    </div>
                </h2>
                <div class="col-md-7 text-center text-md-start order-md-2">
                    <h2>
                        <div class="d-md-none d-lg-block display-4">Experience Spiritual Growth and <span
                                class="text-body-secondary">Community Support</span>
                        </div>
                    </h2>
                    <p class="my-2 text-muted ">Joining the Maseno University Christian Union offers a unique
                        opportunity to
                        experience spiritual growth and find support within a vibrant community of like- minded
                        individuals.
                        Through engaging in various ministries and evangelistic teams, you will have the chance to
                        deepen
                        your faith, build lasting relationships, and make a positive impact on campus and beyond.</p>
                    <a href="#contact " class="btn btn-outline-secondary btn-sm ms-2 mb-2 border-2 ">Get in touch</a>
                </div>
                <div class="col-md-5 text-center order-md-1">
                    <img class="img-fluid" src="/public/assets/images/700x500.png" alt=" ">
                </div>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- blogs -->
    <section id="blogs">
        <div class="container-xl">
            <h2>
                <div class="display-4 text-start">Real Stories From Members</div>
            </h2>
            <p class="my-4 lead text-muted text-start">
                Read the latest blog posts for insights and testimonies.
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <div class="col">
                    <div class="card border-0 h-100">
                        <img src="/public/assets/images/Content-Placeholder-blog.webp" class="card-img-top" alt="...">
                        <div class="card-body p-2">
                            <p class="bg-secondary text-white d-inline"><small>Testimony</small></p>
                            <h5 class="card-title">How God Transformed My Life</h5>
                            <p class="card-text text-muted">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <img src="/public/assets/images/student_m.png" class="w-25 me-3 rounded float-start"
                                alt="...">
                            <p><small>John Doe</small></p>
                            <p class="text-muted"><small>11 Jan 2024 ~ 5 min read</small></p>
                            <p class="mb-0 d-inline"><a class="icon-link icon-link-hover"
                                    style="--bs-link-hover-color-rgb: 0, 166, 81;" href="/app/views/blogs.php#hgtml">
                                    Read more
                                    <svg class="bi" aria-hidden="true">
                                        <use xlink:href="/public/assets/icons/icons.svg#arrow-bar-right"></use>
                                    </svg>
                                </a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 h-100">
                        <img src="/public/assets/images/Content-Placeholder-blog.webp" class="card-img-top" alt="...">
                        <div class="card-body p-2">
                            <p class="bg-secondary text-white d-inline"><small>Inspiration</small></p>
                            <h5 class="card-title">Overcoming Fear and Doubt</h5>
                            <p class="card-text text-muted">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <img src="/public/assets/images/student_f.png" class="w-25 me-3 rounded float-start"
                                alt="...">
                            <p><small>Jane Smith</small></p>
                            <p class="text-muted"><small>24 Feb 2024 ~ 3 min read</small></p>
                            <p class="mb-0 d-inline"><a class="icon-link icon-link-hover"
                                    style="--bs-link-hover-color-rgb: 0, 166, 81;" href="/app/views/blogs.php#ofad">
                                    Read more
                                    <svg class="bi" aria-hidden="true">
                                        <use xlink:href="/public/assets/icons/icons.svg#arrow-bar-right"></use>
                                    </svg>
                                </a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 h-100">
                        <img src="/public/assets/images/Content-Placeholder-blog.webp" class="card-img-top" alt="...">
                        <div class="card-body p-2">
                            <p class="bg-secondary text-white d-inline"><small>Testimony</small></p>
                            <h5 class="card-title">Finding Purpose in Life</h5>
                            <p class="card-text text-muted">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This card has even longer content than the first to show
                                that
                                equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <img src="/public/assets/images/student_m.png" class="w-25 me-3 mt-auto rounded float-start"
                                alt="...">
                            <p><small>John Johnson</small></p>
                            <p class="text-muted"><small>16 Apr 2024 ~ 5 min read</small></p>
                            <p class="mb-0 d-inline">
                                <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 0, 166, 81;"
                                    href="/app/views/blogs.php#fpil">
                                    Read more
                                    <svg class="bi" aria-hidden="true">
                                        <use xlink:href="/public/assets/icons/icons.svg#arrow-bar-right"></use>
                                    </svg>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <a href="/app/views/blogs.php" class="btn col-3 col-lg-1 btn-success btn-sm mt-3">View all</a>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- resources -->
    <section id="E-Library">
        <div class="container-xl">
            <div class="row justify-content-center align-items-center">
                <div class="text-center">
                    <h2>
                        <div class="display-4">Discover New Faith Resources</div>
                    </h2>
                    <p class=" lead text-muted">Explore our collection of faith building materials.</p>
                </div>
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
                    <div class="col">
                        <div class="card h-100 border-success">
                            <div class="card-header border-success">
                                <h6 class="card-subtitle text-body-secondary">Faith</h6>
                            </div>
                            <img src="/public/assets/images/ebook_placeholder.jpg" class="card-img-top img-fluid"
                                style="height: auto;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Growing in Faith</h5>
                                <p class="card-text text-muted">Discover practical insights and tips to strengthen your
                                    faith.</p>
                            </div>
                            <div class="card-footer border-success">
                                <small class="text-body-secondary">
                                    <a href="#resources" class="card-link ">Read</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-success">
                            <div class="card-header border-success">
                                <h6 class="card-subtitle text-body-secondary ">Inspiration</h6>
                            </div>
                            <img src="/public/assets/images/ebook_placeholder.jpg" class="card-img-top img-fluid"
                                style="height: auto;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">Finding Inner Peace</h5>
                                <p class="card-text text-muted">Discover the path to inner peace and contentment.
                                </p>
                            </div>
                            <div class="card-footer border-success">
                                <small class="text-body-secondary">
                                    <a href="#resources" class="card-link ">Read</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card h-100 border-success">
                            <div class="card-header border-success">
                                <h6 class="card-subtitle text-body-secondary ">Testimonials</h6>
                            </div>
                            <img src="/public/assets/images/ebook_placeholder.jpg" class="card-img-top img-fluid"
                                style="height: auto;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Life Changing Stories</h5>
                                <p class="card-text text-muted">Read inspiring stories of transformation and faith.</p>
                            </div>
                            <div class="card-footer border-success">
                                <small class="text-body-secondary">
                                    <a href="#resources" class="card-link ">Read</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#resources" class="btn col-3 col-lg-1 btn-success btn-sm mt-3">View all</a>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">
    
    <!-- events -->
    <section id="events">
        <!-- tab navigation -->
        <div class="container-xl justify-content-center align-items-center">
            <div class="text-start">
                <h2>
                    <div class="display-4">Upcoming Events</div>
                </h2>
                <p class="lead text-muted">Stay updated on the latest events and meetings happening at Maseno University
                    Christian Union.</p>
            </div>
        </div>
        <!-- I-frame for events -->
        <iframe src="/app/components/events.htm" title="Events"></iframe>
    </section>
    <hr class="featurette-divider">
    
    <!-- leadership -->
    <section>
        <div class="container-xl">
            <div class="text-center">
                <h2>
                    <div class="display-4">Meet Our Team</div>
                </h2>
                <p class="lead text-muted mb-16">Get to know the dedicated leaders of our Christian Union.</p>
            </div>
        </div>
        <!-- i-frame -->
        <iframe src="/app/components/leadership.htm" title="Events"></iframe>
        <div class="row justify-content-center align-items-center">
            <a href="/app/views/leadership.php" target="_parent" rel="noreferrer"
                class="btn col-auto btn-success btn-sm mt-3">Meet
                them all</a>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- FAQs -->
    <section id="FAQs">
        <div class="container-xl">
            <div class="text-start">
                <h2>
                    <div class="display-4">FAQs</div>
                </h2>
                <p class="lead text-muted">Find answers to frequently asked questions about the Maseno University
                    Christian
                    Union and membership.</p>
            </div>
            <div class="row my-4 justify-content-around align-items-center">
                <div class="text-center col-6 col-lg-4 mb-2">
                    <svg class="bi text-body-secondary" width="64" height="64">
                        <use xlink:href="/public/assets/icons/icons.svg#person?"></use>
                    </svg>
                </div>
                <div class="col-lg-8">
                    <!-- accordion -->
                    <div class="accordion" id="questions">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionOne" aria-expanded="true" aria-controls="questionOne">
                                    What is a Christian Union?
                                </button>
                            </h2>
                            <div id="questionOne" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#questions">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, nemo, magnam, quo in
                                    dolore non officia quisquam placeat facilis nisi sunt qui ea labore fugit.
                                    Necessitatibus, minima. Voluptate, repellendus laborum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionTwo" aria-expanded="false" aria-controls="questionTwo">
                                    Who can join?
                                </button>
                            </h2>
                            <div id="questionTwo" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#questions">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo omnis et quia
                                    molestiae obcaecati voluptatem temporibus culpa impedit fugit in.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionThree" aria-expanded="false" aria-controls="questionThree">
                                    What ministries are available?
                                </button>
                            </h2>
                            <div id="questionThree" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#questions">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit eaque asperiores
                                    reiciendis deleniti laborum sit quae obcaecati facere vitae architecto!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionFour" aria-expanded="false" aria-controls="questionFour">
                                    How can I get involved?
                                </button>
                            </h2>
                            <div id="questionFour" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#questions">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit eaque asperiores
                                    reiciendis deleniti laborum sit quae obcaecati facere vitae architecto!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-start">
                <h3>Still have questions?</h3>
                <p class="text-muted">Contact us for more information or assistance.</p>
                <a href="#contact " class="btn btn-outline-secondary btn-md ms-2 mb-2 border-2 ">Contact Us</a>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">

    <!-- CTA -->
    <section id="cta">
        <!-- jumbotron -->
        <div class="container-xl md-4 align-content-center align-items-center">
            <div class="p-2 text-center bg-body-tertiar rounded-3 home-cta">
                <svg class="bi mt-4 mb-3" width="70" height="62">
                    <use xlink:href="/public/assets/icons/icons.svg#mucu" />
                </svg>
                <h1 class="text-body-emphasis">
                    <div class="display-4">Feel at the feet of Jesus</div>
                </h1>
                <p class="col-lg-8 mx-auto fs-5 text-muted">
                    Join the Christian Union and be part of a community dedicated to living for God. Engage with our
                    ministries and evangelistic teams to grow in your faith and make a difference in the world.
                </p>
                <div class="d-inline-block text-center text-md-start">
                    <a href="#register" id="joinus" class="btn btn-warning btn-md my-2 ms-1 rounded-pill">Join today</a>
                    <a href="#login" id="learnmore"
                        class="btn btn-outline-primary btn-md ms-1 border-1 rounded-pill">Sign
                        in</a>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section id="contact">
        <div class="container-xl justify-content-center align-items-center">
            <div class="text-start">
                <h2>
                    <div class="display-5">Contact Information</div>
                </h2>
                <p class="my-4 lead text-muted">Have a question or want to join? Get in touch with us.</p>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center align-content-center">
                <div class="col-auto col-lg-4">
                    <div class="text-start">
                        <h5>Email</h5>
                        <p class="mb-0">Send us an email</p>
                        <p><small><a href="mailto:contact@yourcu.com"
                                    class="contact-link">contact@yourcu.com</a></small>
                        </p>
                    </div>
                    <div class="text-start">
                        <h5>Phone</h5>
                        <p class="mb-0">Give us a call</p>
                        <p><small <a href="tel:+254712345678" class="contact-link">+254712345678</a></small></p>
                    </div>
                    <div class="text-start">
                        <h5>Visit Us</h5>
                        <p class="mb-0">LH15 Siriba Campus, Maseno, Kenya</p>
                        <p>
                            <small>
                                <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84;"
                                    href="https://maps.google.com/maps/dir//lecture+hall+15+XJW3%2B7R3+Maseno/@-0.0043532,34.6045384,19z/data=!4m5!4m4!1m0!1m2!1m1!1s0x182aa9fb91ce4dc5:0xc37f7341e6b2549d">
                                    Get directions
                                </a>
                            </small>
                        </p>
                    </div>
                </div>
                <div class="col-auto col-lg-8">
                    <iframe class="map-iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.7272886660101!2d34.604589600000004!3d-0.0042575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa9fb91ce4dc5%3A0xc37f7341e6b2549d!2slecture%20hall%2015!5e0!3m2!1sen!2ske!4v1717702928110!5m2!1sen!2ske"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <section id="footer" class="pb-2">
        <div class="rounded container-xl my-footer">
            <footer class="pt-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-2 mb-3 text-center">
                        <h5>Our Pages</h5>
                        <ul class="nav nav-pills nav-fill flex-column">
                            <li class="nav-item mb-2"><a href="/docs/index.php"
                                    class="active nav-link p-0 text-body-secondary" aria-current="page">Home</a></li>
                            <li class="nav-item mb-2"><a href="/app/views/about.php"
                                    class="nav-link p-0 text-body-secondary">About</a></li>
                            <li class="nav-item mb-2"><a href="/app/views/fellowships.php"
                                    class="nav-link p-0 text-body-secondary">Fellowships`
                                    Events</a></li>
                            <li class="nav-item mb-2"><a href="/app/views/ministries.php"
                                    class="nav-link p-0 text-body-secondary">Ministries</a></li>
                            <li class="nav-item mb-2"><a href="/app/views/evteams.php"
                                    class="nav-link p-0 text-body-secondary">Evangelistic
                                    Teams</a></li>
                            <li class="nav-item mb-2"><a href="/app/views/leadership.php"
                                    class="nav-link p-0 text-body-secondary">Leadership</a></li>
                            <li class="nav-item mb-2"><a href="/"
                                    class="nav-link p-0 text-body-secondary">Noticeboard</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3 text-center">
                        <h5 id="resources">Resources</h5>
                        <ul class="nav flex-column nav-pills nav-fill">
                            <li class="nav-item mb-2"><a href="/app/views/blogs.php"
                                    class="nav-link p-0 text-body-secondary">Blogs</a></li>
                            <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-body-secondary">E-Library</a>
                            </li>
                            <li class="nav-item mb-2"><a href="/app/views/gallery.php"
                                    class="nav-link p-0 text-body-secondary">Gallery</a>
                            </li>
                            <li class="nav-item mb-2"><a href="/app/views/sermons.php"
                                    class="nav-link p-0 text-body-secondary">Sermons`
                                    Notes</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3 text-center">
                        <h5 id="reachout">Reach Out</h5>
                        <ul class="nav flex-column nav-pills nav-fill">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Need
                                    Jesus?</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Prayer
                                    Request</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Get
                                    Support</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Online
                                    Giving</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Follow Us:</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a class="nav-link p-0" href="https://www.facebook.com/Masenocu/"
                                    target="_blank"><svg class="bi text-body-primary" width="20" height="20">
                                        <use xlink:href="/public/assets/icons/icons.svg#facebook"></use>
                                    </svg> Facebook</a></li>
                            <li class="nav-item mb-2"><a class="nav-link p-0"
                                    href="https://whatsapp.com/channel/0029VaCqwFSIt5ryXrSNeN3w" target="_blank"><svg
                                        class="bi text-body-secondary" width="20" height="20">
                                        <use xlink:href="/public/assets/icons/icons.svg#whatsapp"></use>
                                    </svg> WhatsApp</a></li>
                            <li class="nav-item mb-2"><a class="nav-link p-0" href="http://www.youtube.com/@maseno_cu"
                                    target="_blank"><svg class="bi text-body-secondary" width="20" height="20">
                                        <use xlink:href="/public/assets/icons/icons.svg#youtube"></use>
                                    </svg> YouTube</a></li>
                            <li class="nav-item mb-2"><a class="nav-link p-0"
                                    href="https://www.instagram.com/maseno_cu/" target="_blank"><svg
                                        class="bi text-body-secondary" width="20" height="20">
                                        <use xlink:href="/public/assets/icons/icons.svg#instagram"></use>
                                    </svg> Instagram</a></li>
                            <li class="nav-item mb-2"><a class="nav-link p-0" href="https://twitter.com/Maseno_CU"
                                    target="_blank"><svg class="bi text-body-secondary" width="20" height="20">
                                        <use xlink:href="/public/assets/icons/icons.svg#twitter-x"></use>
                                    </svg> X</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 mb-3">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p class="text-body-secondary">Stay up to date with the latest features by joining our
                                newsletter.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 mt-4 mb-0 border-top">
                    <p>© 2024 MUCU, Inc. We love our members!</p>
                    <ul class="list-unstyled d-flex">
                        <li class="nav-item"><a href="#" class="nav-link p-0 text-body-secondary">Privacy Policy</a>
                        </li>
                        <li class="nav-item mx-4"><a href="#" class="nav-link p-0 text-body-secondary">Terms of
                                Service</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>

    <!-- main js -->
    <script src="../public/js/main.js"></script>
    <!-- bootstrap JS -->
    <script src="../public/js/bootstrap.bundle.min.js"></script>

</body>

</html>