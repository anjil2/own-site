<!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Portfolio</title>

        <!-- fontawesome link gareko -->
        <link rel="stylesheet"href="{{ asset('site/fontawesome/all.css') }}">

        <!-- bootstrap link gareko -->
        <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

        <!-- {{-- toastr --}} -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" /> 
  
        <!-- style.css link gareko -->
        <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
    </head>
<body>
    <!-- navbar section starts here -->
    <section id="top-header-navbar">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="#"><img src="{{ asset('site/image/company.png ') }}" alt="logo" class="img-fluid text-center"
                style="text-sm-left">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item text-center">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#skill">Skills</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#time">Education</a>
                    </li>
                    <!-- <li class="nav-item text-center">
                        <a class="nav-link" href="#time">Portfolio</a>
                    </li> -->
                    <!-- <li class="nav-item text-center">
                        <a class="nav-link" href="#message">Contact Us</a>
                    </li> -->
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#ser">Services</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#message">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </section>
    <!-- navbar section ends here -->
    <!--Home section starts here -->
<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4 text-sm-left text-lg-left text-md-left home-text text-left">
            <p>Hello World!</p>
            <h2>I'm <span>Anjil Khatri</span></h2>
            <h1>A Web Developer</h1>
            <span>
            <a href="#about" class="btn btn-primary">Learn More</a>
        </span>
        </div>
        
        <div class="col-md-6 text-center home-image">
            <div class="img-border">
                <img src="{{ asset('site/image/anjilll.png') }}" style="height:300px;width:300px;" class="img-fluid"
                    alt="Anjil's photo">
            </div>
        </div>
    </div>
    <div class="curve col-md-1"></div>
    <div class="curve2 col-md-1"></div>

    <!-- Home section ends here -->
    <!-- About section starts here -->
    <section id="about">
        <div class="row">
            <div class="about-image col-md-4 text-sm-center text-center mt-4">
                <img src="{{ asset('site/image/anjilll.png') }}" style="width:300px;height: 330px;" class="img-fluid"
                    alt="Anjil's photo">
                <div class="iconic text-center">
                    <a href="https://www.facebook.com/profile.php?id=100080341190414"><i
                            class="fb fa-brands fa-facebook-f"></i></a>
                    <a
                        href="https://l.messenger.com/l.php?u=https%3A%2F%2Finstagram.com%2Fnjilkhatri%3Figshid%3DMzNlNGNkZWQ4Mg%253D%253D&h=AT01KUHxh-g162_xB3_zY_VCpJknwERGOvoX2wqCPixF5d2xQW2uEwp5ayH9LuRfGDpAfzsZ9ErmQeL2iODESL8XrGlMGYO2TZ6kIK7BnBjp7XuZaPfqEthABRVlMeEOMBrqGi7ofy-cQ5eSQbprDg"><i
                            class="insta fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/anjil-khatri-a7098827a/"><i
                            class="linked fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="about-info col-md-8 mb-4 text-sm-left text-lg-left text-md-left text-left">
                <p>
                <h2 style="font-size: 30px;
                        font-weight: 700;">LET’S</h2>
                <h2 style="font-size: 30px;
                        font-weight: 700;"><span>INTRODUCE</span> ABOUT</h2>
                <h2 style="font-size: 30px;
                        font-weight: 700;">MYSELF</h2>
                </p>
                <p>I'm Anjil Khatri a Php web developer from lap of the mountains.A passionate and dedicated web
                    developer with a strong base in designing and implementing responsive, user friendly
                    websites.With a year of experience in this field, I have boomed my skills in front-end and
                    back-end development.
                </p>
                <p>I love to crack and change ideas into reality. I am excited to make the leap and continue
                    refining my skills with the right people.</p>
                <a href="#message" class="btn btn btn-primary">Hire Me</a>
                <span style="margin-left:10px;">
                    <a href="{{asset('site/image/cv.jpg')}}" class="btn btn btn-primary">Download CV</a>
                </span>
            </div>
        </div>
    </section>
    <!-- About section ends here -->
    <!-- Skill and experience section starts here -->
    <section id="skill">
        <div class="head text-center">
            <div class="skill-exp">
                <h2 style="font:size 30px;font-weight:700;">SKILL <span>&</span> EXPERIENCE</h2>
            </div>
        </div>
        <div class="row skill-content">
            <div class="content col-md-4">
                <p style="font-size:17px;font-weight:500;">In the past year, I've focused on web development,
                    mastering front-end technologies, delving into back-end development, and becoming proficient in
                    Bootstrap. My commitment to learning keeps me updated with industry trends, strengthening my
                    problem-solving and teamwork skills. Eager to contribute to innovative projects, I'm ready to
                    expand my expertise.
                </p>
            </div>
            <div class="sakill col-md-8 text-end">
                <div class="row">
                    <div class="skills col-md-6">
                        <div class="skill-title">Html</div>
                        <div class="skill-bar"></div>
                        <div class="html skill-fill">
                            <span class="skill-percent" style="color:#fff;">95%</span>
                        </div>
                    </div>
                    <div class="skills col-md-6">
                        <div class="skill-title">Javascript</div>
                        <div class="skill-bar"></div>
                        <div class="js skill-fill">
                            <span class="skill-percent" style="color:#fff;">90%</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="skills col-md-6">
                        <div class="skill-title">Bootstrap</div>
                        <div class="skill-bar"></div>
                        <div class="boot skill-fill">
                            <span class="skill-percent" style="color:#fff;">90%</span>
                        </div>
                    </div>
                    <div class="skills col-md-6">
                        <div class="skill-title">Css</div>
                        <div class="skill-bar"></div>
                        <div class="css skill-fill">
                            <span class="skill-percent" style="color:#fff;">95%</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="skills col-md-6">
                        <div class="skill-title">Blade File</div>
                        <div class="skill-bar"></div>
                        <div class="blade skill-fill">
                            <span class="skill-percent" style="color:#fff;">90%</span>
                        </div>
                    </div>
                    <div class="skills col-md-6">
                        <div class="skill-title">Php</div>
                        <div class="skill-bar"></div>
                        <div class="php skill-fill">
                            <span class="skill-percent" style="color:#fff;">90%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills and experience section ends here -->

    <!-- education timeline section strats here -->
    <section id="time">
        <div class="head text-center">
            <h2 style="font:size 30px;font-weight:700;">EDUCATION</h2>
        </div>
        <div class="timeline-items">
            <div class="timeline-1">
                <div class="timeline-dot">
                    <div class="timeline-date" style="font-weight:500;">2023</div>
                    <div class="timeline-content">
                        <h3 style="font-size:20px;">SEE</h3>
                        <p style="font-size: 16px;font-weight:500;">
                            Motherland Secondary School, Masbar-7, Pokhara, Nepal
                        </p>
                    </div>
                </div>
            </div>
            <div class="timeline-2">
                <div class="timeline-dot">
                    <div class="timeline-date" style="font-weight:500;">2023-2025</div>
                    <div class="timeline-content">
                        <h3 style="font-size:20px;">+2 In Computer Science</h3>
                        <p style="font-size: 16px;font-weight:500;">Motherland Secondary School, Masbar-7, Pokhara,
                            Nepal
                        </p>
                    </div>
                </div>
            </div>
            <div class="timeline-3">
                <div class="timeline-dot">
                    <div class="timeline-date" style="font-weight:500;">2023</div>
                    <div class="timeline-content">
                        <h3 style="font-size:20px;">B.A</h3>
                        <p style="font-size: 16px;font-weight:500;">None</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- education timeline section ends here -->

    <!-- services section starts here -->
    <section id="ser">
        <div class="head">
            <h2 style="font-size: 17px;font-weight:700;">SERVICES
                <div class="what" style="font-size: 30px;font-weight:700;">
                    <span> WHAT</span> I <span>DO</span>
                </div>
            </h2>
        </div>
        <div class="boxes row">
            <div class="box col-sm-4">
                <i class="fa-solid fa-laptop-code icon"></i>
                <h2>Web Design</h2>
                <p>I am able to make any web application easily. From concept to launch, I are committed to transforming your digital vision into a captivating reality.</p>
            </div>
            <div class="box col-sm-4">
                <i class="fa-solid fa-mobile-screen-button icon"></i>
                <h2>Responsive Design</h2>
                <p>I can design a web which is responsive by using bootstrap too. I ensure that your website not only looks stunning but functions intuitively across all devices</p>
            </div>
            <div class="box col-sm-4">
                <i class="fa-solid fa-code icon"></i>
                <h2>Clean Code</h2>
                <p>My commitment to writing clean, well-organized code ensures that your project is not just a product but a sustainable, evolving solution.</p>
            </div>
        </div>
    </section>
    <!-- services section ends here -->

    <!-- message section starts here -->
    <section id="message">
        <div class="head text-center">
            <h2 style="font-size:30px;font-weight: 700;">GET <span>IN</span> TOUCH</h2>
        </div>
        <div class="row">
            <div class="phone col-sm-4 text-center">
                <i style="font-size:25px;padding-bottom:20px;" class="fa-solid fa-phone"></i>
                <h4>Phone:</h4>
                <p><a style="color:#000;" style="text-decoration:none;" href="tel:+977123456789">+977
                        9806151789</a>
                </p>
            </div>
            <div class="email col-sm-4 text-center">
                <i style="font-size:25px;padding-bottom:20px;" class="fa-solid fa-envelope"></i>
                <h4>Email:</h4>
                <p><a style="color:#000;" href="mailto:anjilkhatri980@gmail.com ">anjilkhatri980@gmail.com </a>
                </p>
            </div>
            <div class="address col-sm-4 text-center">
                <i style="font-size:25px;padding-bottom:20px;" class="fa-solid fa-location-dot"></i>
                <h4>Get Me Here</h4>
                <p><a style="color:#000;" href="">Zero KM-5, Pokhara</a></p>
            </div>
        </div>
        <form name="submit-to-google-sheet">
            <div class="row form mt-5">
                <div class="col-md-6 text-center">
                    <div class="fname form-group mb-4">
                        <input type="text" class="form-control" name="fname" placeholder="Enter Your First Name"
                            required>
                    </div>
                    <div class="lname form-group mb-4">
                        <input type="text" class="form-control" name="lname" placeholder="Enter Your Last Name"
                            required>
                    </div>
                    <div class="form-group emaill mb-4">
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                    </div>
                </div>
                <div class="form-group col-md-6 text-center">
                    <textarea name="message" class="form-control" cols="30" rows="4.5" required>
                                </textarea><br>
                    <input type="submit" class="btn btn-primary" style="padding:1px 10px;">
                </div>
            </div>
        </form>
    </section>
    <!-- message section ends here -->
    <div class="scroolup text-right" onclick="topFunction()" id="myBtn" title="Go to top">
        <b><i class="fa-solid fa-arrow-turn-up"></i></b>
    </div>
    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</div>
    <!-- footer section starts here -->
    <section id="foot">
        <div class="lastai" style="padding:3px;">
            <p class="text-center" style="padding-top:5px;"><b>All copyright reserved. Made by</b><span><b>AKHI
                ❤️</b></span>
            </p>
        </div>
    </section>
<!-- footer section ends here -->
<!-- <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbwtygXBQG19KRsn6X6K4h6CPW7oCXDlf94fRuQiM6K98J4I6Prawwmrvgaq71yjt1KhkA/exec'
  const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
  </script> -->
</body>
{{-- jquery link gareko --}}
<script src="{{ asset('site/jquery/jquery.js') }}"></script>

{{-- proper js ko javascript link gareko --}}
<script src="{{ asset('site/bootstrap/proper.js') }}"></script>

{{-- bootstrap ko javascript lai link gareko --}}
<script src="{{ asset('site/bootstrap/bootstrap.js') }}"></script>

{{-- toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{-- fontawesome ko js link gareko --}}
<script src="{{ asset('site/fontawesome/all.js') }}"></script>

</html>