<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awsem -->
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
    <!-- Bootstrab  -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css.map')}}">
    <!-- ***************** -->
    <link rel="stylesheet" href="{{asset('front/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/mdb.min.css.map')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <title>Web Devolepment</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="{{url('/')}}">
                <p>Researcher Guide</p>
            </a>
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link active" href="{{url('web')}}"> web devolbment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('data')}}">Data since </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('mobile')}}">Mobile App Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.udemy.com/courses/development/game-development/">Game Development</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.udemy.com/courses/development/software-engineering/">Software engineering</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('bookshop')}}">bookshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('aboutus')}}">About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contactus')}}">Contact us</a>
                </li>
                </ul>
                <!-- Left links -->
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-link px-3 me-2">
                        <a href="{{url('login')}}"> Login</a>
                    </button>
                    <button type="button" class="btn btn-primary me-3">
                        <a style="color:white" href="{{url('register')}}"> Register</a>
                    </button>
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <main class="container-fluid web-dev">
        <div  style="margin-top:10px;" class="row g-0 bg-light position-relative courses">
            <div class="col-md-4 mb-md-0 p-md-4">
                <img src="{{asset('front/img/p35z482b37hpbfy23vdg.png')}}" class="w-100" alt="...">
            </div>
            <div  class="col-md-8 p-4 ps-md-0">
                <a href="https://www.freecodecamp.org/">Freecodecamp</a>
                <p>Freecode camp is an extensive open-source online coding Bootcamp that offers free training and
                    certification on a wide range of web development skills. Some of the certifications offered by
                    Freecodecamp are Web design, front-end development, Data Visualization, Back-end development & API,
                    Machine Learning, Quality Assurance, Data Analysis, Information Security, and more.

                    With about 40,000 freeCodeCamp.org graduates, working in big techs all over the world, Freecodecamp
                    is the most comprehensive and extensive online training platform on this list. And its courses are
                    all free.</p>
            </div>

        </div>
        <div class="row g-0 bg-light position-relative courses">
            <div class="col-md-8 p-4 ps-md-0">
                <a href="https://www.codecademy.com/learn/paths/web-development"> Codecademy</a>
                <p>
                    Codecademy is another online learning platform that offers training on a wide variety of programming
                    languages such as Java, JavaScript, PHP, Python, Kotlin, HTML, CSS, SQL, C++, Bash/Shell, and more.

                    It offers free beginner-level training on some programming languages. Also, it features some
                    well-structured paid pro courses; tailored towards a career path.
                </p>
            </div>
            <div class="col-md-4 mb-md-0 p-md-4">
                <img src="{{asset('front/img/phwhj048t0j4e3iyervx.png')}}" class="w-100" alt="...">
            </div>
        </div>
        <div class="row g-0 bg-light position-relative courses">
            <div class="col-md-4 mb-md-0 p-md-4">
                <img src="{{asset('front/img/h91uq3rmihqpsgchovr1.png')}}" class="w-100" alt="...">
            </div>
            <div class="col-md-8 p-4 ps-md-0">
                <a href="https://www.w3schools.com/"> W3Schools</a>
                <p>
                    W3School provides one of the most extensive free online learning resources. It features tutorials on
                    a wide range of programming languages such as HTML, CSS, JavaScript, Python, SQL, PHP, and more.

                </p>
            </div>

        </div>
        <div class="row g-0 bg-light position-relative courses">
            <div class="col-md-8 p-4 ps-md-0">
                <a href="https://www.theodinproject.com/"> The Odin Project</a>
                <p>Similar to Freecodecamp, the Odin Project is an open-source online learning platform. It features a
                    full-stack curriculum that would guide your path in your journey to web development mastery.

                    The Odin Project training has three paths:
                    <li> Foundation --- where you learn the basics of web development.
                    </li>
                    <li> Full-stack Ruby on Rails --- full-stack web development with Ruby on Rails back-end
                    </li>
                    <li> Full-stack JavaScript --- full-stack web development with JavaScript on the front-end and
                        back-end.
                </p>
                </li>

            </div>
            <div class="col-md-4 mb-md-0 p-md-4">
                <img src="img/WhatsApp Image 2022-03-14 at 7.17.02 PM.jpeg" class="w-100" alt="...">
            </div>
        </div>
    </main>






    <!-- scrypt -->
    <script src="{{asset('front/js/all.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js.map')}}"></script>
    <script src="{{asset('front/js/mdb.min.js')}}"></script>
    <script src="{{asset('front/js/mdb.min.js.map')}}"></script>
    <script src="{{asset('front/js/scrypt.js')}}"></script>
</body>

</html>