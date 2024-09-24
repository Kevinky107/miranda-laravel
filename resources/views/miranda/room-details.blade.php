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
        <link rel="icon" type="image/svg+xml" href="public/logo.svg" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="./scripts/navbar.js" defer></script>
    </head>
    <body class="room-details">
        <nav>
            <div class="navbar">
                <div class="navbar__left">
                    <img id="open" class="navbar__left__menu" src="public/menu.svg">
                    <div id="logo" class="navbar__left__logo">
                        <img src="public/logo.svg">
                        <img src="public/logo-text.svg">
                    </div>
                </div>
                <div class="navbar__right">
                    <img src="public/profile.svg">
                    <img src="public/search.svg">
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
            <h1>Ultimate Room</h1>
            <div class="return">
                <p><a href="/">Home</a> | <span>Room Details</span></p>
            </div>
        </header>
        <main>
            <section class="check">
                <article class="card--details">
                    <h4>DOUBLE BED</h4>
                    <h1>Luxury Double Bed</h1>
                    <h2><strong>$345</strong>/Night</h2>
                    <img src="public/swiper/room3.jpg"/>
                    <form>
                        <h3>Check Availability</h3>
                        <p>Check In</p>
                        <input type="date">
                        <p>Check Out</p>
                        <input type="date">
                        <input type="submit" value="CHECK AVAILABILITY">
                    </form>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </article>
            </section>
            <section class="amentities">
                <h1>Amentities</h1>
                <article >
                    <ul>
                        <li>
                            <img src="public/offer-card/air.svg">
                            <p>Air conditiones</p>
                        </li>
                        <li>
                            <img src="public/offer-card/breakfast.svg">
                            <p>Breakfast</p>
                        </li>
                        <li>
                            <img src="public/offer-card/cleaning.svg">
                            <p>Cleaning</p>
                        </li>
                        <li>
                            <img src="public/offer-card/grocery.svg">
                            <p>Grocery</p>
                        </li>
                        <li>
                            <img src="public/offer-card/shop.svg">
                            <p>Shop near</p>
                        </li>
                        <li>
                            <img src="public/offer-card/support.svg">
                            <p>24/7 Online Support</p>
                        </li>
                        <li>
                            <img src="public/offer-card/security.svg"/>
                            <p>Smart Security</p>
                        </li>
                        <li>
                            <img src="public/offer-card/wifi.svg">
                            <p>High speed WiFi</p>
                        </li>
                        <li>
                            <img src="public/offer-card/kitchen.svg">
                            <p>Kitchen</p>
                        </li>
                        <li>
                            <img src="public/offer-card/shower.svg">
                            <p>Shower</p>
                        </li>
                        <li>
                            <img src="public/offer-card/bed.svg">
                            <p>Single bed</p>
                        </li>
                        <li>
                            <img src="public/offer-card/towels.svg">
                            <p>Towels</p>
                        </li>
                        <li>
                            <img src="public/offer-card/locker.svg">
                            <p>Strong Locker</p>
                        </li>
                        <li>
                            <img src="public/offer-card/team.svg">
                            <p>Expert Team</p>
                        </li>
                    </ul>
                </article>
            </section>
            <section class="autor">
                <div class="image">
                    <img src="public/verfication.svg"/>
                </div>
                <h2>Kevin Agudo Montil</h2>
                <h4>FOUNDER, QUX CO.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </section>
            <section class="cancellation">
                <h1>Cancellation</h1>
                <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
            </section>
            <section class="related">
                <h1>Related Rooms</h1>
                <article class="rooms-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="room">
                                    <img class="room__image"
                                        src="public/swiper/room3.jpg">
                                    <div class="room__info">
                                        <picture>
                                            <img src="public/room/bed.svg">
                                            <img src="public/room/wifi.svg">
                                            <img src="public/room/car.svg">
                                            <img src="public/room/cold.svg">
                                            <img src="public/room/gym.svg">
                                            <img src="public/room/no-smoking.svg">
                                            <img src="public/room/bar.svg">
                                        </picture>
                                        <h3>Minimal Duplex Room</h3>
                                        <h5>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</h5>
                                        <p>$345/Night<strong>Booking Now</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="room">
                                    <img class="room__image"
                                        src="public/swiper/room3.jpg">
                                    <div class="room__info">
                                        <picture>
                                            <img src="public/room/bed.svg">
                                            <img src="public/room/wifi.svg">
                                            <img src="public/room/car.svg">
                                            <img src="public/room/cold.svg">
                                            <img src="public/room/gym.svg">
                                            <img src="public/room/no-smoking.svg">
                                            <img src="public/room/bar.svg">
                                        </picture>
                                        <h3>Minimal Duplex Room</h3>
                                        <h5>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</h5>
                                        <p>$345/Night<strong>Booking Now</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="room">
                                    <img class="room__image"
                                        src="public/swiper/room3.jpg">
                                    <div class="room__info">
                                        <picture>
                                            <img src="public/room/bed.svg">
                                            <img src="public/room/wifi.svg">
                                            <img src="public/room/car.svg">
                                            <img src="public/room/cold.svg">
                                            <img src="public/room/gym.svg">
                                            <img src="public/room/no-smoking.svg">
                                            <img src="public/room/bar.svg">
                                        </picture>
                                        <h3>Minimal Duplex Room</h3>
                                        <h5>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</h5>
                                        <p>$345/Night<strong>Booking Now</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </article>
            </section>
        </main>
        <footer>
            <div class="footer-info">
                <img src="public/background-geometric.png" class="background">
                <div>
                    <img src="public/logo-big.svg">
                    <h4>Lorem ipsum dolor sit amet, consect etur adipisicing elit,
                        sed doing eius mod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitat ion ullamco laboris nisi.</h4>
                    <div class="footer-info__social">
                        <img src="public/socials/fa.svg" />
                        <img src="public/socials/tw.svg" />
                        <img src="public/socials/be.svg" />
                        <img src="public/socials/in.svg" />
                        <img src="public/socials/yt.svg" />
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
                        <img src="public/contact-phone.svg">
                        <div>
                            <h4>Phone Number</h4>
                            <p>+34 616 42 20 58</p>
                        </div>
                    </picture>
                    <picture>
                        <img src="public/contact-email.svg">
                        <div>
                            <h4>Email Adress</h4>
                            <p>kevinagudomontil@gmail.com</p>
                        </div>
                    </picture>
                    <picture>
                        <img src="public/contact-ubication.svg">
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
        <script src="scripts/swipers/room-details-swipers.js"></script>
    </body>
</html>