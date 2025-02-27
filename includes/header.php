<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css-folder/index.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

</head>

<body>
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid header-navbar">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="./expert-img/expert-logo.png" alt="">
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">
                                Home
                            </a
            >
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="./about-us.php">About Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Our Team</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Testimonials</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                Services
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Courses
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">TOFEL</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">IELTS</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">PTE</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Duolingo English Test</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Countries
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#"> United Kingdom</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">United States</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Denmark</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Australia</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <button class="btn btn-danger apply-now-btn">Apply Now</button>
                </div>
            </div>
        </nav>
    </section>


    <!-- <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid nav-bar">
                <img class="nav-bar-logo" src="./images/kasthamandap image.png"
                    alt>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active content"
                                aria-current="page" href="http://localhost/kasthamandap/index.php#">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle content" href="#"
                                id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu"
                                aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">About
                                        Us</a></li>
                                <li><a class="dropdown-item" href="#">
                                        OurTeams</a></li>
                                <li><a class="dropdown-item" href="#">
                                        Testimonials</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active content"
                                aria-current="page" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active content"
                                aria-current="page" href="#">Country</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle content" href="#"
                                id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Courses
                            </a>
                            <ul class="dropdown-menu"
                                aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">PTE
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        TOFEL</a></li>
                                <li><a class="dropdown-item" href="#">
                                        Duolingo English Test</a></li>
                                <li><a class="dropdown-item" href="#">
                                        IELTS</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle content" href="#"
                                id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Countries
                            </a>
                            <ul class="dropdown-menu"
                                aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">United Kingdom
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        United States</a></li>
                                <li><a class="dropdown-item" href="#">
                                      Australia</a></li>
                                <li><a class="dropdown-item" href="#">
                                        Denmark</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active content"
                                aria-current="page" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active content"
                                aria-current="page" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <button class="btn bg-danger btn-nav-bar"
                        type="submit">Apply Now</button>


                </div>
            </div>
        </nav>
    </div> -->