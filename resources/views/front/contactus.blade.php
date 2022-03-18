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
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
    <!-- ***************** -->
    <link rel="stylesheet" href="{{asset('front/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/mdb.min.css.map')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <title>ContactUs</title>
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
                        <a href="{{url('custom_login')}}"> Login</a>
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
    <section style="margin-top: 50px;">
        <div style="display: flex;
        justify-content: center;
    " class="container-fluid row">
            <form style="width: 500px;">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form4Example1" class="form-control" />
                    <label class="form-label" for="form4Example1">Name</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form4Example2" class="form-control" />
                    <label class="form-label" for="form4Example2">Email address</label>
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                    <label class="form-label" for="form4Example3">Message</label>
                </div>

                <!-- Checkbox -->

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
            </form>

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