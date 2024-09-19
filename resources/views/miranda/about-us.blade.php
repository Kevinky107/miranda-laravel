<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
        <title>HOTEL MIRANDA</title>
        <link rel="icon" type="image/svg+xml" href="logo.svg" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="./scripts/navbar.js" defer></script>
    </head>
    <body class="about-us">
        <nav>
            <div class="navbar">
                <div class="navbar__left">
                    <img id="open" class="navbar__left__menu" src="menu.svg">
                    <div id="logo" class="navbar__left__logo">
                        <img src="logo.svg">
                        <img src="logo-text.svg">
                    </div>
                </div>
                <div class="navbar__right">
                    <img src="profile.svg">
                    <img src="search.svg">
                </div>
                <div id="dropdown" class="nav-links--hide">
                    <ul>
                        <li><a href="about-us">About Us</a></li>
                        <li><a href="rooms">Rooms</a></li>
                        <li><a href="offers">Offers</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            <h4>THE ULTIMATE LUXURY</h4>
            <h1>About Us</h1>
            <div class="return">
                <p><a href="home">Home</a> | <span>About</span></p>
            </div>
        </header>
        <main>
            <section class="presentation">
                <div class="videoContainer">
                    <div class="videoWrapper">
                        <iframe
                            src="https://www.youtube.com/embed/Bu3Doe45lcU?si=esEmTrY6w55mUSOm&amp;start=25"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <h2>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h2>
                <div class="picture">
                    <img src="Breakfast.svg">
                    <img src="Airport.svg">
                    <img src="Guide.svg">
                    <img src="Luxury.svg">
                </div>
            </section>
            <section class="restaurant-section">
                <article class="card--shadow2">
                    <img src="Menu/restaurant.jpeg">
                    <div>
                        <h4>RESTAURANT</h4>
                        <h1>Get Restaurant Facilities & Many Other More</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                        <button>TAKE A TOUR</button>
                    </div>
                </article>
            </section>
            <section class="facilities--dark">
                <h4>FACILITIES</h4>
                <h1>Core Features</h1>
                <article class="slider">
                    <div class="swiper swiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide">
                                    <h2>01</h2>
                                    <img src="rating.svg">
                                    <h3>Have High Rating</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <h2>02</h2>
                                    <img src="time.svg">
                                    <h3>Have High Rating</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <h2>03</h2>
                                    <img src="location.svg">
                                    <h3>Have High Rating</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <h2>04</h2>
                                    <img src="cancel.svg">
                                    <h3>Have High Rating</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <h2>05</h2>
                                    <img src="payment.svg">
                                    <h3>Have High Rating</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <h2>06</h2>
                                    <img src="offer.svg">
                                    <h3>Have High Rating</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination2"></div>
                    </div>
                </article>
            </section>
            <section class="counter">
                <h4>COUNTER</h4>
                <h2>Some Fun Facts</h2>
                <picture>
                    <img class="counter__ico" src="happy.svg"/>
                    <div>
                        <h2>8000</h2>
                        <p>Happy Users</p>
                    </div>
                    <img class="counter__arrow" src="arrow.svg"/>
                </picture>
                <picture>
                    <img class="counter__ico" src="reviews.svg"/>
                    <div>
                        <h2>10M</h2>
                        <p>Reviews & Appriciate</p>
                    </div>
                    <img class="counter__arrow" src="arrow.svg"/>
                </picture>
                <picture>
                    <img class="counter__ico" src="country.svg"/>
                    <div>
                        <h2>100</h2>
                        <p>Country Coverage</p>
                    </div>
                    <img class="counter__arrow" src="arrow.svg"/>
                </picture>
                <article class="slider">
                    <div class="swiper swiper1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                    <img src="counter/image1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="counter/image2.jpg" />
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination1"></div>
                    </div>
                </article>
            </section>
        </main>
        <footer>
            <div class="footer-info">
                <img src="background-geometric.png" class="background">
                <div>
                    <img src="logo-big.svg">
                    <h4>Lorem ipsum dolor sit amet, consect etur adipisicing elit,
                        sed doing eius mod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitat ion ullamco laboris nisi.</h4>
                    <div class="footer-info__social">
                        <img src="socials/fa.svg" />
                        <img src="socials/tw.svg" />
                        <img src="socials/be.svg" />
                        <img src="socials/in.svg" />
                        <img src="socials/yt.svg" />
                    </div>
                </div>
                <div>
                    <h3>Services.</h3>
                    <div class="list">
                        <ul>
                            <li>+ Restaurant & Bar</li>
                            <li>+ Swimming Pool</li>
                            <li>+ Wellness & Spa</li>
                            <li>+ Restaurant</li>
                            <li>+ Conference Room</li>
                            <li>+ Cocttail Party House</li>
                        </ul>
                        <ul>
                            <li>+ Gaming Zone</li>
                            <li>+ Marrige Party</li>
                            <li>+ PartyPlanning</li>
                            <li>+ Tour Consultancy</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h3>Contact Us.</h3>
                    <picture>
                        <img src="contact-phone.svg">
                        <div>
                            <h4>Phone Number</h4>
                            <p>+34 616 42 20 58</p>
                        </div>
                    </picture>
                    <picture>
                        <img src="contact-email.svg">
                        <div>
                            <h4>Email Adress</h4>
                            <p>kevinagudomontil@gmail.com</p>
                        </div>
                    </picture>
                    <picture>
                        <img src="contact-ubication.svg">
                        <div>
                            <h4>Ubication</h4>
                            <p>València, València, 46020</p>
                        </div>
                    </picture>
                </div>
            </div>
            <div class="footer">
                <p>Copyright By@Example - 2024</p>
                <p>Terms of use | Privacy Environmental Policy</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="scripts/swipers/abouts-us-swipers.js"></script>
    </body>
</html>