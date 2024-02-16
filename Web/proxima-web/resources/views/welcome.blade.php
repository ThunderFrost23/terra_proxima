<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- import jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
            integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <title>Terra Proxima</title>
</head>

<body>
<!-- MOBILE/TABLET -->
<div class="mobile">
    <h1>NOT SUPPORTED ON MOBILE</h1>
    <h2>COMMING SOON...</h2>
</div>



<!-- NAVBAR -->
<div class="page">
    <div class="navbar">

        <!-- NAVIGATION BUTTON -->
        <div class="left-section">
            <img class="logo" src="{{ asset('storage/src/logo.png') }}" alt="Terra_Proxima">

            <ul class="menu">
                <li><a class="menu-content" href="#home">Home</a></li>
                <li><a class="menu-content" href="#news">News</a></li>
                <li><a class="menu-content" href="#classes">Classes</a></li>
                <li><a class="menu-content" href="#about">About</a></li>
            </ul>
        </div>


        <!-- PLAY BUTTON -->
        <div class="right-section">
            <button class="play-button">PLAY NOW</button>
        </div>
    </div>
    <!-- ----- -->


    <!-- HOME -->
    <div class="home" id="home">
        <h1 class="gamename noselect">TERRA PROXIMA</h1>
    </div>
    <!-- ----- -->

    <!-- NEWS -->
    <div class="divider news-title" id="news"><span></span><span>NEWS</span><span></span></div>
    <div class="news">

        <!-- NEWS SECTION -->
        <div class="card">
            <div class="card__cover card__cover--one">
                <div class="card__tag">Pokemon</div>
            </div>
            <div class="card__body">
                <div class="card__title">Pokemon Halloween Event</div>
                <div class="card__desc">Mario ipsum RGB mushroom 1-up. Lava NES fireball 1-up piranha plant castle green
                    shell.</div>
            </div>
        </div>

        <div class="card">
            <div class="card__cover card__cover--one">
                <div class="card__tag">Pokemon</div>
            </div>
            <div class="card__body">
                <div class="card__title">Pokemon Halloween Event</div>
                <div class="card__desc">Mario ipsum RGB mushroom 1-up. Lava NES fireball 1-up piranha plant castle green
                    shell.</div>
            </div>
        </div>

        <div class="card">
            <div class="card__cover card__cover--one">
                <div class="card__tag">Pokemon</div>
            </div>
            <div class="card__body">
                <div class="card__title">Pokemon Halloween Event</div>
                <div class="card__desc">Mario ipsum RGB mushroom 1-up. Lava NES fireball 1-up piranha plant castle green
                    shell.</div>
            </div>
        </div>
    </div>

    <!-- CLASSES -->
    <div class="divider classes-title" id="classes"><span></span><span>CLASSES</span><span></span></div>
    <div class="classes">
        <p class="classes-desc">Discover the different classes below!</p>

        <!-- DPS -->
        <div class="section dps">
            <div class="dark">
                <h1 class="noselect">DPS</h1>
            </div>

            <div class="classes-hovered">
                <div class="classes-infos">
                    <p class="noselect">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium voluptate delectus sed reiciendis rem non modi quas necessitatibus deserunt earum magni
                        nesciunt
                        qui maiores unde, sunt dignissimos ut? Sequi, fugiat.
                    </p>
                </div>

                <div class="classes-img">
                    <img src="{{ asset('storage/src/classes/excalibur.png') }}" alt="dps">
                </div>
            </div>
        </div>
        <!-- ----- -->


        <!-- FIRE -->
        <div class="section fire">
            <div class="dark">
                <h1 class="noselect">FIRE</h1>
            </div>

            <div class="classes-hovered">
                <div class="classes-infos">
                    <p class="noselect">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium voluptate delectus sed reiciendis rem non modi quas necessitatibus deserunt earum magni
                        nesciunt
                        qui maiores unde, sunt dignissimos ut? Sequi, fugiat.
                    </p>
                </div>

                <div class="classes-img">
                    <img src="{{ asset('storage/src/classes/ember.png') }}" alt="fire">
                </div>
            </div>
        </div>
        <!-- ----- -->


        <!-- WATER -->
        <div class="section water">
            <div class="dark">
                <h1 class="noselect">WATER</h1>
            </div>

            <div class="classes-hovered">
                <div class="classes-infos">
                    <p class="noselect">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium voluptate delectus sed reiciendis rem non modi quas necessitatibus deserunt earum magni
                        nesciunt
                        qui maiores unde, sunt dignissimos ut? Sequi, fugiat.
                    </p>
                </div>

                <div class="classes-img">
                    <img src="{{ asset('storage/src/classes/frost.png') }}" alt="water">
                </div>
            </div>
        </div>
        <!-- ----- -->


        <!-- AIR -->
        <div class="section air">
            <div class="dark">
                <h1 class="noselect">AIR</h1>
            </div>

            <div class="classes-hovered">
                <div class="classes-infos">
                    <p class="noselect">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium voluptate delectus sed reiciendis rem non modi quas necessitatibus deserunt earum magni
                        nesciunt
                        qui maiores unde, sunt dignissimos ut? Sequi, fugiat.
                    </p>
                </div>

                <div class="classes-img">
                    <img src="{{ asset('storage/src/classes/mag.png') }}" alt="air">
                </div>
            </div>
        </div>
    </div>
    <!-- ----- -->


    <!-- EARTH -->
    <div class="section earth">
        <div class="dark">
            <h1 class="noselect">EARTH</h1>
        </div>

        <div class="classes-hovered">
            <div class="classes-infos">
                <p class="noselect">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Praesentium voluptate delectus sed reiciendis rem non modi quas necessitatibus deserunt earum magni
                    nesciunt
                    qui maiores unde, sunt dignissimos ut? Sequi, fugiat.
                </p>
            </div>

            <div class="classes-img">
                <img src="{{ asset('storage/src/classes/rhino.png') }}" alt="earth">
            </div>
        </div>
    </div>
    <!-- ----- -->

    <!-- AB0UT -->
    <div class="divider news-title" id="about"><span></span><span>ABOUT</span><span></span></div>
    <div class="about">
        <div class="about-content">
            <img class="about-img" src="{{ asset('storage/src/epitech.png') }}" alt="epitech-logo">
            <p class="about-text">
                A "Beat Them All" game developed using Unreal Engine 5 as a year-end project for the Epitech school. The
                game features multiple elemental classes.

                <br><br>

                To showcase proficiency in game development, particularly using Unreal Engine 5, and to present a dynamic
                and engaging "Beat Them All" experience.

                <br><br>

                Developed by students as part of their year-end project for the Epitech school. The target audience includes
                gamers and fans of the "Beat Them All" genre.
            </p>
        </div>
    </div>

    <!-- BACK TO TOP -->
    <div class="back-to-top">
        <a href="#home">
            <img class="back-to-top" src="{{ asset('storage/src/up-arrow.png') }}" alt="back-to-top">
        </a>
    </div>
</div>
</body>


<!-- FOOTER -->
<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h1 class="logo-text">Terra Proxima</h1>
                <p>The future of gaming !</p>
                <div class="contact">
                    <span><img src="{{ asset('storage/src/icons/phone.svg') }}" alt="phone">&nbsp;0262 XX XX XX</span>

                    <span>
            <a href="mailto:support@doko.com">
              <img src="{{ asset('storage/src/icons/mail.svg') }}" alt="mail">&nbsp;support@doko.com
            </a>
          </span>

                    <span>
            <a href="https://www.instagram.com/terraproxima.game/" target="_blank">
              <img src="{{ asset('storage/src/icons/instagram.svg') }}" alt="insta">&nbsp;@terraproxima.game
            </a>
          </span>

                    <span>
            <a href="https://twitter.com/proxima_te30755" target="_blank">
              <img src="{{ asset('storage/src/icons/x-twitter.svg') }}" alt="x-twitter">&nbsp;@terraproxima
            </a>
          </span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; Terra Proxima | Designed by DOKO.co
        </div>
    </div>
</footer>

<script>
    $(document).ready(function () {
        // Transition effect for navbar
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                $(".navbar").css("background-color", "rgba(0, 0, 0, 0.8)");
            }

            else {
                $(".navbar").css("background-color", "rgba(0, 0, 0, 0.5)");
            }
        })
    })

</script>

</html>
