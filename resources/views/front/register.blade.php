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
    <title>Document</title>
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
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link " href="web.html"> web devolbment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data.html">Data since </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mobile.html">Mobile App Development</a>
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
                    <a class="nav-link" href="bookshob.html">bookshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact us</a>
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

    <section style="margin-top: 50px;">
        <div style="display: flex;
        justify-content: center;">
        <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" />
                        <label class="form-label" for="form3Example2">Name</label>
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Email address</label>
            </div>
      

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
            </div>
            <div class="form-outline mb-4">
                <input type="password" type="password" name="password_confirmation" id="form3Example4" class="form-control" />
                <label class="form-label" for="password-confirm"> password_confirm</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

            <!-- Register buttons -->
            
            
        </form>




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