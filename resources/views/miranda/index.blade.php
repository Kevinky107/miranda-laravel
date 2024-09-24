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
    <body class="home">
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
                        <li><a href="./about-us">About Us</a></li>
                        <li><a href="./rooms">Rooms</a></li>
                        <li><a href="./offers">Offers</a></li>
                        <li><a href="./contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            <h4>THE ULTIMATE LUXURY EXPERIENCE</h4>
            <h1>The Perfect Base For You</h1>
            <div>
                <button>TAKE A TOUR</button>
                <button>LEAN MORE</button>
            </div>
        </header>
        <main>
            <section class="availability">
                <form class="availability__form">
                    <div>
                        <p>Arrival Date</p>
                        <input type="date">
                    </div>
                    <div>
                        <p>Depature Date</p>
                        <input type="date">
                    </div>
                    <input type="submit" value="CHECK AVAILABILITY">
                </form>
            </section>
            <section class="about-us">
                <article class="card">
                    <h4>ABOUT US</h4>
                    <h1>Discover Our Underground.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</p>
                    <button class="booking">BOOK NOW</button>
                </article>
                <article class="about-us__teamInfo">
                    <img src="team.jpg" class="group-img">
                    <div>
                        <picture>
                            <img src="group.svg">
                            <img src="group.svg" class="bImg">
                        </picture>
                        <h3>Strong Team</h3>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor.</h4>
                    </div>
                </article>
                <article class="about-us__roomInfo">
                    <img src="room.jpg" class="room-img">
                    <div>
                        <img src="date.svg">
                        <h3>Luxury Room</h3>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor.</h4>
                    </div>
                </article>
                <div class="about-us__decoration"></div>
            </section>
            <section>
                <article class="picker">
                    <h4>ROOMS</h4>
                    <h1>Hand Picked Rooms</h1>
                    <div class="swiper swiper1">
                        <div class="swiper-wrapper">
                        @foreach($rooms as $room)
                            <div class="swiper-slide">
                                <picture>
                                    <img src="room/bed.svg">
                                    <img src="room/wifi.svg">
                                    <img src="room/car.svg">
                                    <img src="room/cold.svg">
                                    <img src="room/gym.svg">
                                    <img src="room/no-smoking.svg">
                                    <img src="room/bar.svg">
                                </picture>
                                <img class="slide-image"
                                    src="swiper/room1.jpg">
                                <div class="slide-info">
                                    <div>
                                        <h3>{{$room->name}}</h3>
                                        <h5>Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore.</h5>
                                    </div>
                                    <p><strong>{{$room->offer}}</strong>/Night</p>
                                </div>
                            </div>
                        @endforeach    
                        </div>
                        <div class="swiper-button-prev swiper-button-prev1"></div>
                        <div class="swiper-button-next swiper-button-next1"></div>
                    </div>
                </article>
                <article class="card--black">
                    <div class="card__info">
                        <h4>INTRO VIDEO</h4>
                        <h1>Meet With Our Luxury Place.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat you have to understand this.</p>
                        <button class="booking show">BOOK NOW</button>
                    </div>
                    <div class="videoWrapper">
                        <iframe
                            src="https://www.youtube.com/embed/Bu3Doe45lcU?si=esEmTrY6w55mUSOm&amp;start=25"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen></iframe>
                    </div>
                    <button class="booking hide">BOOK NOW</button>
                    <div class="card--black__decoration"></div>
                </article>
            </section>
            <section class="facilities">
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
                <article class="facilities__grid">
                    <div class="facilities__grid__card">
                        <h2>01</h2>
                        <img src="rating.svg">
                        <h3>Have High Rating</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="facilities__grid__card">
                        <h2>02</h2>
                        <img src="time.svg">
                        <h3>Have High Rating</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="facilities__grid__card">
                        <h2>03</h2>
                        <img src="location.svg">
                        <h3>Have High Rating</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="facilities__grid__card">
                        <h2>04</h2>
                        <img src="cancel.svg">
                        <h3>Have High Rating</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="facilities__grid__card">
                        <h2>05</h2>
                        <img src="payment.svg">
                        <h3>Have High Rating</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                    <div class="facilities__grid__card">
                        <h2>06</h2>
                        <img src="offer.svg">
                        <h3>Have High Rating</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </article>
            </section>
            <section class="menu">
                <img class="menu__donut" src="donut.svg"/>
                <h4 class="menu__subtitle">MENU</h4>
                <h2 class="menu__title">Our Foods Menu</h2>
                <article class="menu__slider">
                    <div class="swiper swiper3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide">
                                    <picture>
                                        <img src="Menu/food1.jpg" />
                                        <div>
                                            <h4>Eggs & Bacon</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food2.jpg" />
                                        <div>
                                            <h4>Tea or Coffee</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food3.jpg" />
                                        <div>
                                            <h4>Chia Oatmeal</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <picture>
                                        <img src="Menu/food4.jpg" />
                                        <div>
                                            <h4>Fruit Parfait</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food5.jpg" />
                                        <div>
                                            <h4>Marmelade Selection</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food6.jpg" />
                                        <div>
                                            <h4>Cheese Plate</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                    <picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <picture>
                                        <img src="Menu/food7.jpg" />
                                        <div>
                                            <h4>Salads</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food8.jpg" />
                                        <div>
                                            <h4>Avocado Toasts</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food9.jpg" />
                                        <div>
                                            <h4>Pastries</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <picture>
                                        <img src="Menu/food10.jpg" />
                                        <div>
                                            <h4>Crepes</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food11.jpg" />
                                        <div>
                                            <h4>Mediterranean Breakfast</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food12.jpg" />
                                        <div>
                                            <h4>Smoothies</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev swiper-button-prev3"></div>
                        <div class="swiper-button-next swiper-button-next3"></div>
                    </div>
                </article>
                <article class="menu__slider--desktop">
                    <div class="swiper swiper5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide">
                                    <picture>
                                        <img src="Menu/food1.jpg" />
                                        <div>
                                            <h4>Eggs & Bacon</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food2.jpg" />
                                        <div>
                                            <h4>Tea or Coffee</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food3.jpg" />
                                        <div>
                                            <h4>Chia Oatmeal</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food4.jpg" />
                                        <div>
                                            <h4>Fruit Parfait</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food5.jpg" />
                                        <div>
                                            <h4>Marmelade Selection</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food6.jpg" />
                                        <div>
                                            <h4>Cheese Plate</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <picture>
                                        <img src="Menu/food7.jpg" />
                                        <div>
                                            <h4>Salads</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food8.jpg" />
                                        <div>
                                            <h4>Avocado Toasts</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food9.jpg" />
                                        <div>
                                            <h4>Pastries</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food10.jpg" />
                                        <div>
                                            <h4>Crepes</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food11.jpg" />
                                        <div>
                                            <h4>Mediterranean Breakfast</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                    <picture>
                                        <img src="Menu/food12.jpg" />
                                        <div>
                                            <h4>Smoothies</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                        </div>
                                        <img class="arrow" src="arrow.svg"/>
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev swiper-button-prev5"></div>
                        <div class="swiper-button-next swiper-button-next5"></div>
                    </div>
                </article>
                <article class="slider">
                    <div class="swiper swiper4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                    <img src="Menu/buffet1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="Menu/buffet2.jpeg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="Menu/buffet3.jpg" />
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination4"></div>
                    </div>
                </article>
                <article class="menu__buffet">
                    <img src="Menu/buffet1.jpg" />
                    <img src="Menu/buffet2.jpeg" />
                    <img src="Menu/buffet3.jpg" />
                </article>
            </section>
            <section class="numbers">
                <picture>
                    <img src="rocket.svg"/>
                    <h2><strong>84k</strong>+</h2>
                    <p>Projects are Completed</p>
                </picture>
                <picture>
                    <img src="group2.svg"/>
                    <h2><strong>10M</strong>+</h2>
                    <p>Active Backers Around World</p>
                </picture>
                <picture>
                    <img src="stonks.svg"/>
                    <h2><strong>02k</strong>+</h2>
                    <p>Categories Served</p>
                </picture>
                <picture>
                    <img src="book.svg"/>
                    <h2><strong>100M</strong>+</h2>
                    <p>Idea Raised Founds</p>
                </picture>
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
        <script src="./scripts/swipers/home-swipers.js"></script>
    </body>
</html>