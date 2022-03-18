<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
    <!-- font awsem -->
    <!-- Bootstrab  -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css.map')}}">
    <!-- ***************** -->
    <link rel="stylesheet" href="{{asset('front/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/mdb.min.css.map')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <title>Document</title>
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
                        <a class="nav-link" href="mobile">Mobile App Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.udemy.com/courses/development/game-development/">Game
                            Development</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://www.udemy.com/courses/development/software-engineering/">Software
                            engineering</a>
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

    <section style="margin-top: 30px;"> 
        <div class="container-fluid">
            <div style="display: flex; justify-content: center; gap: 30px;"  class="row row-cols-1 row-cols-md-3 g-4">
                <div style="width: 250px; margin-bottom: 10px; " class="col-md-4">
                    <div class="card">
                        <img  src="{{asset('front/img/274898005_980415359516672_5562895919004444559_n.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center"> Mariam mohamed </h5>
                            
                                <div style="display: flex; justify-content: space-evenly;">
                                    <a href="https://www.facebook.com/profile.php?id=100031207553776"> <i class="fab fa-facebook"></i></a>
                                    <a href="https://instagram.com/mariam_m.sabry?utm_medium=copy_link"> <i class="fab fa-instagram"></i> </a>
                                    <a href="mailto:Mariemsabry555@gmail.com"> <i class="fas fa-envelope"></i> </a>           
                                    <a href=""> <i class="fab fa-linkedin"></i> </a>
                                </div>
                        </div>
                        
                    </div>
                </div>
                <div style="width: 250px; margin-bottom: 10px; " class="col-md-4">
                    <div class="card">
                        <img src="{{asset('front/img/275754237_676958367089380_3133867151099878553_n.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">abdallah Ibrahim </h5>
                                <div style="display: flex; justify-content: space-evenly;">
                                    <a href="https://www.facebook.com/11abdallah.zakii"> <i class="fab fa-facebook"></i></a>
                                    <a href="https://instagram.com/abdallah.zakii?utm_medium=copy_link"> <i class="fab fa-instagram"></i> </a>
                                    <a href="mailto: abdodaana09@gmail.com"> <i class="fas fa-envelope"></i> </a>           
                                    <a href=""> <i class="fab fa-linkedin"></i> </a>
                                </div>
                        </div>
                    </div>
                </div>
                <div style="width: 250px; margin-bottom: 10px;" class="col-md-4">
                    <div  class="card">
                        <img  style="height: 301.33px;" src="{{asset('front/img/275252339_1291968054658089_6298931791339515573_n.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center"> Diana mohamed</h5>
                                <div style="display: flex; justify-content: space-evenly;">
                                    <a href="https://www.facebook.com/profile.php?id=100038248636742"> <i class="fab fa-facebook"></i></a>
                                    <a href=""> <i class="fab fa-instagram"></i> </a>
                                    <a href="mailto: Dianamohamed655@gmail.com"> <i class="fas fa-envelope"></i> </a>           
                                    <a href=""> <i class="fab fa-linkedin"></i> </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center; gap: 30px;"  class="row row-cols-1 row-cols-md-3 g-4">
                <div style="width: 250px; " class="col-md-4">
                    <div class="card">
                        <img  src="{{asset('front/img/274898005_980415359516672_5562895919004444559_n.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center"> Mariam mohamed </h5>
                            
                                <div style="display: flex; justify-content: space-evenly;">
                                    <a href="https://www.facebook.com/profile.php?id=100031207553776"> <i class="fab fa-facebook"></i></a>
                                    <a href="https://instagram.com/mariam_m.sabry?utm_medium=copy_link"> <i class="fab fa-instagram"></i> </a>
                                    <a href=""> <i class="fas fa-envelope"></i> </a>           
                                    <a href=""> <i class="fab fa-linkedin"></i> </a>
                                </div>
                        </div>
                        
                    </div>
                </div>
                <div style="width: 250px; " class="col-md-4">
                    <div class="card">
                        <img src="{{asset('front/img/275754237_676958367089380_3133867151099878553_n.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">abdallah Ibrahim </h5>
                                <div style="display: flex; justify-content: space-evenly;">
                                    <a href="https://www.facebook.com/11abdallah.zakii"> <i class="fab fa-facebook"></i></a>
                                    <a href="https://instagram.com/abdallah.zakii?utm_medium=copy_link"> <i class="fab fa-instagram"></i> </a>
                                    <a href=""> <i class="fas fa-envelope"></i> </a>           
                                    <a href=""> <i class="fab fa-linkedin"></i> </a>
                                </div>
                        </div>
                    </div>
                </div>
                <div style="width: 250px;" class="col-md-4">
                    <div  class="card">
                        <img  style="height: 301.33px;" src="{{asset('front/img/275252339_1291968054658089_6298931791339515573_n.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center"> Diana mohamed</h5>
                                <div style="display: flex; justify-content: space-evenly;">
                                    <a href="https://www.facebook.com/profile.php?id=100038248636742"> <i class="fab fa-facebook"></i></a>
                                    <a href=""> <i class="fab fa-instagram"></i> </a>
                                    <a href=""> <i class="fas fa-envelope"></i> </a>           
                                    <a href=""> <i class="fab fa-linkedin"></i> </a>
                                </div>
                        </div>
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