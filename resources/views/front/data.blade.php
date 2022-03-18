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
    <title>Data Science</title>
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
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="{{url('web')}}"> web devolbment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('data')}}">Data since </a>
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
    <section class="container-fluid data">
        <div class="container-fluid ">
            <div>
                <img src="{{asset('front/img/Courses-or-Certifications.png')}}" class="img-fluid rounded mx-auto d-block " " alt=" ...">
            </div>

        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="https://www.edx.org/course/intro-to-data-science"> edX </a>
                        <p class="card-text">An American online course provider, edX is offering an introductory course
                            on Data Science for beginners to mainly cover:
                            <li> The definition of Data Science and what Data Scientists do </li>
                            <li> Skills required to be a successful Data Science professional </li>
                            <li> Useful tools and algorithms in the field</li>
                            <li> How to gather a strong team dedicated to Data Science </li>
                            <li> The role of Data Science in business </li>
                            While this course is completely free, one can opt to receive a verified certification by
                            paying.


                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="https://developers.google.com/machine-learning/crash-course/"> Google Cloud </a>
                        <p class="card-text">Google Cloud offers a free Machine Learning crash course with video
                            lectures, practice exercises, and case studies for learners. Learning with Google AI allows
                            customization in the learning experience through consolidated videos, tutorials, sample
                            codes, courses, documentation, labs, and interactive sessions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="https://www.freecodecamp.org/news/search/?query=Data%20Science"> freeCodeCamp </a>
                        <p class="card-text">An online learning platform, freeCodeCamp is another best place to learn
                            Data Science for free. They offer free lessons on statistics for Data Science, computer
                            science concepts, Python fundamentals, Pandas, Python Matplotlib, and even a guide to build
                            a good Data Science portfolio. Scroll through their list of 6,000+ articles and see if you
                            find anything of interest.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="https://www.khanacademy.org/search?referer=%2F&page_search_query=Data+Science"> Khan
                            Academy </a>
                        <p class="card-text">Khan Academy has a number of free lessons that explain various Data Science
                            concepts such as introduction to SQL, data analysis, finding patterns in datasets,
                            statistics and probability, etc. These mini-courses also come with practice sets to test
                            your knowledge.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="https://www.kaggle.com/learn"> Kaggle
                        </a>
                        <p class="card-text">A subsidiary of Google LLC, Kaggle is an online community dedicated to Data
                            Science and Machine Learning. It offers a condensed form of complex Data Science-related
                            topics and free courses that help learners gain needed Data science skills in a short amount
                            of time through key practical components.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="https://intellipaat.com/academy/course/python-for-data-science-free-training/"> Intellipaat’s Python for Data Science Foundation Course
                        </a>
                        <p class="card-text">Python is one of the most widely used Data Science programming languages. Intellipaat offers this foundation course for free to help out absolute beginners to get comfortable with the language so that they can later apply these skills during Data Science training without difficulty.

                        </p>
                    </div>
                </div>
            </div>
            <!---------------  -->
            <div style="margin-top:50px; margin-bottom: 10px; " class="container-fluid col-md-12 ">
                <div>
                    <img src="img/Become-a-Data-Science-Architect-IBM (1).webp" class="img-fluid rounded mx-auto d-block " " alt=" ...">
                </div>
                <h2 style="text-align: center; padding-top: 20px;"> Data Science Tutorials</h2>
    
            </div>


            <!-- --------------- -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="https://www.youtube.com/watch?v=9l0DAYyJJhI&list=PLVHgQku8Z936G-ncQhfGn9aBL256wpnsl"> Intellipaat </a>

                            <p class="card-text">Intellipaat offers both a Data Science tutorial on their website and several video tutorials that are available on their YouTube channel. The tutorials are very extensive and cover a wide range of topics in detail. For anyone, who wants to completely learn Data Science systematically, Intellipaat has included almost all concepts as well as practical projects for hands-on experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="https://www.kdnuggets.com/tutorials/index.html"> KDnuggets</a>

                            <p class="card-text">KDnuggets™ is an award-winning site for learning Data Science, AI, Big Data, Data Analytics, Machine Learning, and data mining. It is known for its monthly tutorials and overviews on various Data Science topics. They also redirect users to other free resources and learning materials.
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="https://www.topcoder.com/community/competitive-programming/tutorials/"> Topcoder</a>

                            <p class="card-text">This website offers tutorials that focus on discussing Data Science concepts and includes a platform that offers advice on a multitude of topics by industry experts. Additionally, they provide practical information and start-up guides for new visitors.
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="https://www.kaggle.com/learn"> Learn Data Science by Nitin Borwankar</a>

                            <p class="card-text">This website contains open content on Data Science to raise awareness and focus on the fundamentals of Data Science. There is a good collection of materials available on it that covers many critical topics, including linear regression, random forest algorithms, data explorations, etc., as well as practice worksheets with code sections for learners to explore.
                            </p>
                    </div>
                </div>
            </div>

        </div>


    </section>





    <!-- scrypt -->
    <script src="{{asset('front/js/all.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js.map')}}"></script>
    <script src="{{asset('front/js/mdb.min.js')}}"></script>
    <script src="{{asset('front/js/mdb.min.js.map')}}"></script>
    <script src="{{asset('front/js/scrypt.js')}}"></script>
</body>

</html>