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

    <link rel="stylesheet" href="aos-by-red.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- style -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <title>Home Page</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="index.html">
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
                        <a class="nav-link active" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link " href="{{url('web')}}"> web devolbment</a>
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
                    <a  class="nav-link" href="{{url('bookshop')}}">bookshop</a>
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
                        <a href="{{url('login_user')}}"> Login</a>
                    </button>
                    <button type="button" class="btn btn-primary me-3">
                        <a style="color:white" href="{{url('register_user')}}"> Register</a>
                    </button>
                    <button type="button" class="btn btn-primary me-3">
                        <a style="color:white" href="{{url('login_admin')}}">Login As Admin</a>
                    </button>
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- End Navbar -->
    <main style="overflow: hidden;" class="container-fluid home">
        <div  data-aos="fade-left" data-aos-once="true"  style="margin-top:10px;" class="row g-0 bg-light position-relative courses">
            <div class="col-md-4 mb-md-0 p-md-4">
                <img src="{{asset('front/img/WhatsApp Image 2022-03-14 at 7.16.40 PM.jpeg')}}" class="w-100" alt="...">
            </div>
            <div class="col-md-8 p-4 ps-md-0">
                <a href="{{url('web')}}">Web development</a>
                <p>Web development is the work involved in developing a website for the Internet or an intranet.
                    Web development can range from developing a simple single static page of plain text to complex web
                    applications,
                    electronic businesses, and social network services..</p>
            </div>
        </div>

        <div  data-aos="fade-right" data-aos-once="true"  class="row g-0 bg-light position-relative courses">
            <div class="col-md-8 p-4 ps-md-0">
                <a href="{{url('data')}}">Data science</a>
                <p>Data science is an interdisciplinary field that uses scientific methods, processes, 
                    algorithms and systems to extract knowledge and insights from noisy, structured and unstructured data,
                    and apply knowledge and actionable insights from data across a broad range of application domains.</p>
            </div>
            <div class="col-md-4 mb-md-0 p-md-4">
                <img src="{{asset('front/img/WhatsApp Image 2022-03-14 at 7.16.49 PM.jpeg')}}" class="w-100" alt="...">
            </div>
        </div>
        <div  data-aos="fade-left" data-aos-once="true" class="row g-0 bg-light position-relative courses">
            <div class="col-md-4 mb-md-0 p-md-4">
                <img src="{{asset('front/img/WhatsApp Image 2022-03-14 at 7.16.57 PM.jpeg')}}" class="w-100" alt="...">
            </div>
            <div class="col-md-8 p-4 ps-md-0">
                <a href="{{url('mobile')}}"> Mobile app development</a>
                <p>
                    Mobile app development is the act or process by which a mobile app is developed for mobile devices,
                    such as personal digital assistants, enterprise digital assistants or mobile phones. 
                    These software applications are designed to run on mobile devices, such as a smartphone or tablet computer.</p>
            </div>

        </div>
        <div data-aos="fade-right" data-aos-once="true"  class="row g-0 bg-light position-relative courses">
            <div class="col-md-8 p-4 ps-md-0">
                <a href="game.html">Gamee Dvelopment</a>
                <p>Gamee Dvelopment is the art of creating games and describes the design, development and release of a game.
                    It may involve concept generation, design, build, test and release. 
                    While you create a game, it is important to think about the game mechanics, rewards,
                    player engagement and level design.</p>
            </div>
            <div class="col-md-4 mb-md-0 p-md-4">
                <img src="{{asset('front/img/WhatsApp Image 2022-03-14 at 7.17.02 PM.jpeg')}}" class="w-100" alt="...">
            </div>
        </div>
        <div  data-aos="fade-left" data-aos-once="true" class="row g-0 bg-light position-relative courses">
            <div class="col-md-4 mb-md-0 p-md-4">
                <img src="{{asset('front/img/WhatsApp Image 2022-03-14 at 7.17.11 PM.jpeg')}}" class="w-100" alt="...">
            </div>
            <div class="col-md-8 p-4 ps-md-0">
                <a href="software.html">Software engineering</a>
                <p>
                    Software engineering is an engineering approach on a software development of systematics application. 
                    A software engineer is a person who applies the principles of software engineering to design, develop, 
                    maintain, test, and evaluate computer software.</p>
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000,
            once: true,
        });
    </script>
</body>

</html>