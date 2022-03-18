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
    <title>BookShop</title>
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
                        <a class="nav-link" href="{{url('mobile')}}">Mobile App Development</a>
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
    <section style="margin-top: 30px;" class="container-fluid">


        <div class="row">
            <div class="col-md-3">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-all-list" data-mdb-toggle="list"
                        href="#list-all" role="tab" aria-controls="list-all">All</a>
                    <a class="list-group-item list-group-item-action " id="list-home-list" data-mdb-toggle="list"
                        href="#list-home" role="tab" aria-controls="list-home">Web Development</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-mdb-toggle="list"
                        href="#list-profile" role="tab" aria-controls="list-profile">Data science</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-mdb-toggle="list"
                        href="#list-messages" role="tab" aria-controls="list-messages">Mobile App Development</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-mdb-toggle="list"
                        href="#list-settings" role="tab" aria-controls="list-settings">Game Development</a>
                    <a class="list-group-item list-group-item-action" id="list-software-list" data-bs-toggle="list"
                        href="#list-software" role="tab" aria-controls="list-software">software engineering</a>
                </div>
            </div>
            @foreach ($books as $book)
            <div class="col-md-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-all" role="tabpanel" aria-labelledby="list-all-list">
                        <div style="display: flex;justify-content: center;" class="container row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img style="height: 250px;" src="{{$book->image}}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{$book->name}}</h5>
                                        <a href="https://eloquentjavascript.net/Eloquent_JavaScript_small.pdf"><i
                                                class="fas fa-book-reader"> </i> open</a>
                                        <a style="margin-left: 10px;"
                                            href="books/Learn Java for Web Development ( PDFDrive ).rar"><i
                                                class="fas fa-download"></i>Download</a>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                
                
                
                </div>
            </div>
            @endforeach
         
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