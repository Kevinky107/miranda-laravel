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
    <body class="offers">
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
            <h1>Our Offers</h1>
            <div class="return">
                <p><a href="/">Home</a> | <span>Offers</span></p>
            </div>
        </header>
        <main>
            <section class="cards">
            @foreach($rooms as $room)
                <article class="card--offer">
                    <picture>
                        <img src="swiper/room3.jpg">
                        <div>
                            <h3><strong>${{$room->price}}</strong>/Night</h3>
                            <h2><strong>${{$room->offer}}</strong>/Night</h2>
                        </div>
                    </picture>
                    <div class="card--offer__info">
                        <h4>DOUBLE BED</h4>
                        <h1>{{$room->name}}</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                            <li>
                                <img src="offer-card/air.svg">
                                <p>Air conditiones</p>
                            </li>
                            <li>
                                <img src="offer-card/breakfast.svg">
                                <p>Breakfast</p>
                            </li>
                            <li>
                                <img src="offer-card/cleaning.svg">
                                <p>Cleaning</p>
                            </li>
                            <li>
                                <img src="offer-card/grocery.svg">
                                <p>Grocery</p>
                            </li>
                            <li>
                                <img src="offer-card/shop.svg">
                                <p>Shop near</p>
                            </li>
                            <li>
                                <img src="offer-card/wifi.svg">
                                <p>High speed WiFi</p>
                            </li>
                            <li>
                                <img src="offer-card/kitchen.svg">
                                <p>Kitchen</p>
                            </li>
                            <li>
                                <img src="offer-card/shower.svg">
                                <p>Shower</p>
                            </li>
                            <li>
                                <img src="offer-card/bed.svg">
                                <p>Single bed</p>
                            </li>
                            <li>
                                <img src="offer-card/towels.svg">
                                <p>Towels</p>
                            </li>
                        </ul>
                        <button class="booking">BOOK NOW</button>
                    </div>
                </article>
            @endforeach
            </section>
            <section class="popular">
                <h4>POPULAR LIST</h4>
                <h1>Popular Rooms</h1>
                <article class="rooms-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="swiper-slide">
                                <div class="room">
                                    <img class="room__image"
                                        src="swiper/room3.jpg">
                                    <div class="room__info">
                                        <picture>
                                            <img src="room/bed.svg">
                                            <img src="room/wifi.svg">
                                            <img src="room/car.svg">
                                            <img src="room/cold.svg">
                                            <img src="room/gym.svg">
                                            <img src="room/no-smoking.svg">
                                            <img src="room/bar.svg">
                                        </picture>
                                        <h3>{{$rooms[$i]->name}}</h3>
                                        <h5>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</h5>
                                        <p>${{$rooms[$i]->offer}}/Night<strong class="booking">Booking Now</strong></p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
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
        <script src="scripts/swipers/offers-swipers.js"></script>
    </body>
</html>