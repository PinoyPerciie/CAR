{{--
@if(5 > 10)
    <p> 5 is lower than 10</p>
@elseif(5 == 10)
    <p>5 is indeed lower than 10</p>
@else
    <h2>All conditions are wrong!</h2>
@endif

@unless (empty($name))
    <h2>Name isn't empty!</h2>
@endunless

@empty($secondName)
    <h2>Name is empty!</h2>
@endempty

 @isset($name)
    <h2>Name has been set</h2>
 @endisset --}}


 <!--
    comparing multiple possible conditions
    Multiple values that may require the same code
 -->

 {{-- @switch($name)
     @case('Daryl')
        <h2>Name is Daryl!</h2>
        @break
        @case('John')
        <h2>Name is John!</h2>
        @break
        @case('Michael')
        <h2>Name is Michael!</h2>
     @default

 @endswitch --}}

 <!-- outpuput  Name is john
      value is john -->








{{--
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-with,
    initial-scale=1.0">
    <title>
        Personal Website - Code With Dary
    </title>

    <link
        rel="stylesheet"
        href="style.css"
    />

    <link
    href="https://fonts.google.com/specimen/Lato?
    query=lato:wght300;400;900;&display=swap"
    rel="stylesheet"

    />

    <link rel="stylesheet"
    href="//use.fontawesome.com/release/v5.0.7/css/all.css"

    />

 </head>

    <body>
        <head>
            <!--Navigatio -->

            <nav class="top-menu-container">
                <div class="logo-header">
                    <a href="">
                        <img
                        src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018__340.png"
                        alt="Logo personal portfolio"
                        title="Logo personal portfolio"
                        />
                    </a>
                </div>


                <ul>
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Porfolio</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Hero background & content on top of hero background -->
        <div id="hero-container">
                <h1>Multi-Disciplinary <br> <span
                    class="line">Designer</span> <span
                    class="orange-text">Developer</span>
                </h1>

                <div class="btn-wrapper">
                    <a href="">Let's connect</a>
                    <a href="">View Porfolio</a>
                </div>
            </div>
        </div>

        <!-- 4 grid layout slkills on homepage -->
        <!-- Every div is a grid item -->
        <div class="container-grid-4">
        </div>
            <img src="img/icon-box.jpg" alt="">
            <h2>
                    Web Design
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
            <div>

            </div>
                <img src="img/icon-boox.jpg" alt="">
                <h2>
                    Web Development
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur!
                </p>
            <div>
                <div>
                    <img src="img/icon-box.jpg" alt="">
                    <h2>
                        Product Design
                    </h2>
                    <p>
                        lorem ipsum dolor sit amet consectetur!
                    </p>
                </div>

                <div>
                    <img src="img/icon-box.jpg" alt="">
                    <h2>
                        Creative Thinker
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur!
                    </p>
                </div>
            </div>


            <div class="header-section">
                <h2 class="dark big">Team</h2>

                <hr>

            <!-- Meet the team section -->
            <div class="conatiner-grid-2">
                <div>
                    <img class="img-team" src="img/team-section-home.jpg"
                     alt="">
                </div>
                <div>
                    <h2>
                        Who we are
                    </h2>

                    <h3 class="orange-text">
                        Meet Our Team
                    </h3>

                    <p>
                        Whether you require distribution or fulfillment,
                        defined freight forwarding, or a complete supply
                        chain solution, we are here for you.
                    </p>

                    <div class="btn-wrapper">
                        <a href="">About</a>

                    </div>
                </div>
            </div>

            <div class="header-section">
                <h2 class="dark big">Skills</h2>

                <hr>
            </div>
        <!-- Section of skills -->
        <div class="section-why-us">
            <div>
                <i class="fas fa-code-branch icon-why-us"></i>
                <h2>
                    Quality Control
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit.
                </p>
            </div>

            <div class="middle">
                <h2>
                    <img src="img/icon-box.jpg" alt="">
                </h2>
            </div>

            <div>

                <i class="far fa-keyboard icon-why-us"></i>
                <h2>
                    optional Maintenance
                </h2>
                <p>
                    lorem ipsum dolor sit amet consectur,
                    adipisicing elit.
                </p>
            </div>
            <div>
                 <i class="fab fa-google icon-why-us"></i>
                 <h2>
                     Search Engine Friendly
                 </h2>
                 <p>
                    lorem ipsum dolor sit amet consectur,
                    adipisicing elit.
                 </p>
            </div>

            <div>
                <i class="fas fa-globe icon-why-us"></i>
                <h2>
                     Web Master Tools
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur,
                    adipisicing
                </p>
            </div>

        <!-- Footer -->

        <footer>
            <div class="container-footer">

            <img
                src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018__340.png"
                alt="Logo personal portfolio"
                title="Logo personal portfolio"
                />

                <p>
                    This website is created by Code With Dary
                </p>

           </footer>
    </body>
    </html> --}}
