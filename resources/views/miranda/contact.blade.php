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
    <body class="contact">
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
            <h1>New Details</h1>
            <div class="return">
                <p><a href="/">Home</a> | <span>Blog</span></p>
            </div>
        </header>
        <main>
            <section class="data">
                <picture>
                    <h2>01</h2>
                    <img src="contact-email.svg"/>
                    <div>
                        <h3>Hotel Adress</h3>
                        <h4>Avinguda de Valladolid 35</h4>
                        <h4>València, València</h4>
                    </div>
                </picture>
                <picture>
                    <h2>02</h2>
                    <img src="contact-phone.svg"/>
                    <div>
                        <h3>Phone Number</h3>
                        <h4>+34 616 42 20 58</h4>
                        <h4>+34 616 42 20 58</h4>
                    </div>
                </picture>
                <picture>
                    <h2>03</h2>
                    <img src="contact-ubication.svg"/>
                    <div>
                        <h3>Email</h3>
                        <h4>kevinagudomontil@gmail.com</h4>
                        <h4>kevinagudomontil@gmail.com</h4>
                    </div>
                </picture>
            </section>
            <section class="map">
                <div class="videoWrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49269.9397503492!2d-0.36658283743462744!3d39.48353120316475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd60461f0b68680f%3A0x8e96ddc9636c587f!2sAv.%20de%20Valladolid%2C%2035%2C%20Benimaclet%2C%2046020%20Val%C3%A8ncia!5e0!3m2!1ses!2ses!4v1718965376038!5m2!1ses!2ses" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <section class="form">
                <form>
                    <div>
                        <div class="form__input-container">
                            <input placeholder="Your full name" type="text">
                            <img src="form/name.svg"/>
                        </div>
                        <div class="form__input-container">
                            <input placeholder="Add phone number" type="text">
                            <img src="form/number.svg"/>
                        </div>
                    </div>
                    <div>
                        <div class="form__input-container">
                            <input placeholder="Enter email address" type="text">
                            <img src="form/email.svg"/>
                        </div>
                        <div class="form__input-container">
                            <input placeholder="Enter subject" type="text">
                            <img src="form/subject.svg"/>
                        </div>
                    </div>
                    <div class="form__input-container">
                        <textarea rows="9">Enter message</textarea>
                        <img src="form/message.svg"/>
                    </div>
                    <input type="submit" value="SEND">
                </form>
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
    </body>
</html>